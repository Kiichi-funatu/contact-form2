<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(Request $request)
    {
        $inputs = $request->all();

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'tell' => 'required',
            'address' => 'required',
            'detail' => 'required|max:120',
            'category_id' => 'required',
        ]);

        return view('confirm', compact('inputs'));
    }

    public function store(Request $request)
    {
        if ($request->input('back') === 'back') {
            return redirect('/')->withInput();
        }

        Contact::create([
            'category_id' => $request->category_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'email' => $request->email,
            'tell' => $request->tell,
            'address' => $request->address,
            'building' => $request->building,
            'detail' => $request->detail,
        ]);

        return view('thanks');
    }

    /*public function admin() {
        $contacts = contact::with('category')->paginate(7);
        $categories = Category::all();
        return view('admin', compact('contacts', 'categories'));
    }*/

    public function admin (Request $request) {
       $contacts = Contact::simplePaginate(7);

       // ① 空のクエリビルダーを作る（注文票）
    $query = Contact::query();

    // ② キーワード検索（名前・メール）
    if ($request->keyword) {
        $keyword = $request->keyword;
        $query->where(function($q) use ($keyword) {
            $q->where('first_name', 'like', "%{$keyword}%")
              ->orWhere('last_name', 'like', "%{$keyword}%")
              ->orWhere('email', 'like', "%{$keyword}%");
        });
    }

    // ③ 性別検索
    if ($request->gender) {
        $query->where('gender', $request->gender);
    }

    // ④ カテゴリ検索

    if ($request->category_id) {
        $query->where('category_id', $request->category_id);
    }

    // ⑤ 日付検索（created_at の日付一致）

    if ($request->date) {
        $query->whereDate('created_at', $request->date);
    }

    // ③ 検索結果を取得（with 必須）
    $contacts = $query->with('category')->paginate(7);

    // ④ カテゴリ一覧（フォーム用）
    $categories = Category::all();

    return view('admin', compact('contacts', 'categories'));
    }

    public function export(Request $request)
{
    // admin() と同じ検索ロジック
    $query = Contact::with('category');

    if ($request->keyword) {
        $keyword = $request->keyword;
        $query->where(function($q) use ($keyword) {
            $q->where('first_name', 'like', "%{$keyword}%")
              ->orWhere('last_name', 'like', "%{$keyword}%")
              ->orWhere('email', 'like', "%{$keyword}%");
        });
    }

    if ($request->gender) {
        $query->where('gender', $request->gender);
    }

    if ($request->category_id) {
        $query->where('category_id', $request->category_id);
    }

    if ($request->date) {
        $query->whereDate('created_at', $request->date);
    }

    $contacts = $query->get();

    // CSV 出力
    $csv = "ID,名前,メール,性別,カテゴリ,作成日\n";

    foreach ($contacts as $contact) {
        $csv .= implode(',', [
            $contact->id,
            $contact->first_name . ' ' . $contact->last_name,
            $contact->email,
            $contact->gender,
            $contact->category->name ?? '',
            $contact->created_at,
        ]) . "\n";
    }

    return response($csv)
        ->header('Content-Type', 'text/csv')
        ->header('Content-Disposition', 'attachment; filename="contacts.csv"');
}
   
    public function destroy(Request $request) {
        contact::findOrFail($request->id)->delete();
        return redirect('/admin')->with('message', '削除しました');
    }

}