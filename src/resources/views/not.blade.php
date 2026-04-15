<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
 <link rel="stylesheet" href="http://localhost/css/common.css">

  <link rel="stylesheet" href="http://localhost/css/admin.css">
</head>

<body>
  <div class="app">
    <header class="header">
      <div class="header__left"></div>
      <h1 class="header__heading">FashionablyLate</h1>
      <form method="POST" action="/logout" class="header__right"
>
    <input type="hidden" name="_token" value="4ieCkfI7Vj6r1iAdDvmC7iPntrivPaUm2xyep27b">    <button type="submit" class="header__link">logout</button>
</form>
    </header>
    <div class="content">
      <h2 class="admin-title">Admin</h2>
<form action="/admin" method="get">
<input type="hidden" name="_token" value="4ieCkfI7Vj6r1iAdDvmC7iPntrivPaUm2xyep27b">    <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" class="search-input">
    <select name="gender" class="search-select">
        <option value="">性別</option>
        <option value="1">男性</option>
        <option value="2">女性</option>
        <option value="3">その他</option>
    </select>
    <select name="category_id" class="search-select">
        <option value="">お問い合わせの種類</option>
                <option value="1" >商品のお届けについて</option>
                <option value="2" >商品の交換について</option>
                <option value="3" >商品トラブル</option>
                <option value="4" >ショップへのお問い合わせ</option>
                <option value="5" >その他</option>
            </select>

    <input type="date" name="date" value="" class="search-date">
    <button type="submit" class="search-btn">検索</button>
    <a href="/admin" class="reset-btn">リセット</a>
    <div class="export-pagination-row">
        <a href="http://localhost/admin/export" class="export-btn">エクスポート</a>
        <div class="pagination-wrapper">
            <div class="ui pagination menu" role="navigation">
        
                    <a class="icon item disabled" aria-disabled="true" aria-label="&laquo; 前"> <i class="left chevron icon"></i> </a>
        
        
                    
            
            
    
                                        <a class="item active" aria-current="page">1</a>
                                                            <a class="item" href="http://localhost/admin?page=2">2</a>
                                                            <a class="item" href="http://localhost/admin?page=3">3</a>
                                                            <a class="item" href="http://localhost/admin?page=4">4</a>
                                                            <a class="item" href="http://localhost/admin?page=5">5</a>
                                
        
                    <a class="icon item" href="http://localhost/admin?page=2" rel="next" aria-label="次 &raquo;"> <i class="right chevron icon"></i> </a>
            </div>

        </div>
    </div>
    
</form>
<table class="admin-table">
    <tr>
        <th>お名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>お問い合わせの種類</th>
        <th></th>
    </tr>
        <tr>
        <td>O&#039;Reilly Giovanna</td>
        <td>            女性
                    </td>
        <td>stanford17@example.com</td>
        <td>商品の交換について</td>
        <td>
           <a href="#modal-1" class="detail-link">詳細</a>
        </td>
    </tr>
    
    <!-- モーダル -->
    <div id="modal-1" class="modal">
        <div class="modal-content">
            
            <a href="#" class="modal-close">⊗</a>

            

            <div class="modal-group">
                <label for="">お名前</label>
                <p class="modal-row">O&#039;Reilly Giovanna</p>
            </div>
            <div class="modal-group">
                <label for="">性別</label>
                <p class="modal-row">
                    女性
                                    </p>
            </div>
            <div class="modal-group">
                <label for="">メールアドレス</label>
                <p class="modal-row">stanford17@example.com</p>
            </div>
            <div class="modal-group">
                <label for="">電話番号</label>
                <p class="modal-row">+1-857-943-9747</p>
            </div>
            <div class="modal-group">
                <label for="">住所</label>
                <p class="modal-row">New Mackenzie12913 Gia Greens</p>
            </div>
            <div class="modal-group">
                <label for="">建物名</label>
                <p class="modal-row">Apt. 958</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせの種類</label>
                <p class="modal-row">商品の交換について</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせ内容</label>
                <p class="modal-row">Voluptas commodi ratione dolores. Ex quos sed ipsum atque.</p>
            </div>
            
            <!-- 削除フォーム -->
            <div class="modal-title">
                <form action="/delete" method="post" class="delete-form">
                <input type="hidden" name="_token" value="4ieCkfI7Vj6r1iAdDvmC7iPntrivPaUm2xyep27b">                <input type="hidden" name="_method" value="DELETE">                <input type="hidden" name="id" value="1">
                <button type="submit" class="delete-btn">削除</button>    
                </form>
            </div>
            
        </div>
    </div>

        <tr>
        <td>Emmerich Jon</td>
        <td>            女性
                    </td>
        <td>annabell.osinski@example.net</td>
        <td>ショップへのお問い合わせ</td>
        <td>
           <a href="#modal-2" class="detail-link">詳細</a>
        </td>
    </tr>
    
    <!-- モーダル -->
    <div id="modal-2" class="modal">
        <div class="modal-content">
            
            <a href="#" class="modal-close">⊗</a>

            

            <div class="modal-group">
                <label for="">お名前</label>
                <p class="modal-row">Emmerich Jon</p>
            </div>
            <div class="modal-group">
                <label for="">性別</label>
                <p class="modal-row">
                    女性
                                    </p>
            </div>
            <div class="modal-group">
                <label for="">メールアドレス</label>
                <p class="modal-row">annabell.osinski@example.net</p>
            </div>
            <div class="modal-group">
                <label for="">電話番号</label>
                <p class="modal-row">1-401-939-1212</p>
            </div>
            <div class="modal-group">
                <label for="">住所</label>
                <p class="modal-row">Annabellborough4079 Beer Flats</p>
            </div>
            <div class="modal-group">
                <label for="">建物名</label>
                <p class="modal-row">Apt. 183</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせの種類</label>
                <p class="modal-row">ショップへのお問い合わせ</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせ内容</label>
                <p class="modal-row">Perspiciatis sapiente dolores eaque. Aliquid amet delectus autem et. Reiciendis minus dolor qui quo.</p>
            </div>
            
            <!-- 削除フォーム -->
            <div class="modal-title">
                <form action="/delete" method="post" class="delete-form">
                <input type="hidden" name="_token" value="4ieCkfI7Vj6r1iAdDvmC7iPntrivPaUm2xyep27b">                <input type="hidden" name="_method" value="DELETE">                <input type="hidden" name="id" value="2">
                <button type="submit" class="delete-btn">削除</button>    
                </form>
            </div>
            
        </div>
    </div>

        <tr>
        <td>Kshlerin Eloisa</td>
        <td>            その他
                    </td>
        <td>nicklaus22@example.org</td>
        <td>商品トラブル</td>
        <td>
           <a href="#modal-3" class="detail-link">詳細</a>
        </td>
    </tr>
    
    <!-- モーダル -->
    <div id="modal-3" class="modal">
        <div class="modal-content">
            
            <a href="#" class="modal-close">⊗</a>

            

            <div class="modal-group">
                <label for="">お名前</label>
                <p class="modal-row">Kshlerin Eloisa</p>
            </div>
            <div class="modal-group">
                <label for="">性別</label>
                <p class="modal-row">
                    その他
                                    </p>
            </div>
            <div class="modal-group">
                <label for="">メールアドレス</label>
                <p class="modal-row">nicklaus22@example.org</p>
            </div>
            <div class="modal-group">
                <label for="">電話番号</label>
                <p class="modal-row">314.968.6754</p>
            </div>
            <div class="modal-group">
                <label for="">住所</label>
                <p class="modal-row">East Rosemarie6840 Mia Lakes</p>
            </div>
            <div class="modal-group">
                <label for="">建物名</label>
                <p class="modal-row">Suite 496</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせの種類</label>
                <p class="modal-row">商品トラブル</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせ内容</label>
                <p class="modal-row">Libero omnis sed minima voluptatem. Non voluptate perferendis sed aut. Mollitia rem sint consequatur dolor nulla est.</p>
            </div>
            
            <!-- 削除フォーム -->
            <div class="modal-title">
                <form action="/delete" method="post" class="delete-form">
                <input type="hidden" name="_token" value="4ieCkfI7Vj6r1iAdDvmC7iPntrivPaUm2xyep27b">                <input type="hidden" name="_method" value="DELETE">                <input type="hidden" name="id" value="3">
                <button type="submit" class="delete-btn">削除</button>    
                </form>
            </div>
            
        </div>
    </div>

        <tr>
        <td>Turcotte Serenity</td>
        <td>            女性
                    </td>
        <td>micaela88@example.net</td>
        <td>商品の交換について</td>
        <td>
           <a href="#modal-4" class="detail-link">詳細</a>
        </td>
    </tr>
    
    <!-- モーダル -->
    <div id="modal-4" class="modal">
        <div class="modal-content">
            
            <a href="#" class="modal-close">⊗</a>

            

            <div class="modal-group">
                <label for="">お名前</label>
                <p class="modal-row">Turcotte Serenity</p>
            </div>
            <div class="modal-group">
                <label for="">性別</label>
                <p class="modal-row">
                    女性
                                    </p>
            </div>
            <div class="modal-group">
                <label for="">メールアドレス</label>
                <p class="modal-row">micaela88@example.net</p>
            </div>
            <div class="modal-group">
                <label for="">電話番号</label>
                <p class="modal-row">+1-845-956-1433</p>
            </div>
            <div class="modal-group">
                <label for="">住所</label>
                <p class="modal-row">Lake Delaneymouth6915 Nolan Extensions Apt. 558</p>
            </div>
            <div class="modal-group">
                <label for="">建物名</label>
                <p class="modal-row">Apt. 143</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせの種類</label>
                <p class="modal-row">商品の交換について</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせ内容</label>
                <p class="modal-row">Distinctio corrupti tenetur veritatis quae non eaque exercitationem. Consequuntur sequi sunt nostrum dolore sequi.</p>
            </div>
            
            <!-- 削除フォーム -->
            <div class="modal-title">
                <form action="/delete" method="post" class="delete-form">
                <input type="hidden" name="_token" value="4ieCkfI7Vj6r1iAdDvmC7iPntrivPaUm2xyep27b">                <input type="hidden" name="_method" value="DELETE">                <input type="hidden" name="id" value="4">
                <button type="submit" class="delete-btn">削除</button>    
                </form>
            </div>
            
        </div>
    </div>

        <tr>
        <td>Shields Damion</td>
        <td>            その他
                    </td>
        <td>mekhi83@example.com</td>
        <td>商品のお届けについて</td>
        <td>
           <a href="#modal-5" class="detail-link">詳細</a>
        </td>
    </tr>
    
    <!-- モーダル -->
    <div id="modal-5" class="modal">
        <div class="modal-content">
            
            <a href="#" class="modal-close">⊗</a>

            

            <div class="modal-group">
                <label for="">お名前</label>
                <p class="modal-row">Shields Damion</p>
            </div>
            <div class="modal-group">
                <label for="">性別</label>
                <p class="modal-row">
                    その他
                                    </p>
            </div>
            <div class="modal-group">
                <label for="">メールアドレス</label>
                <p class="modal-row">mekhi83@example.com</p>
            </div>
            <div class="modal-group">
                <label for="">電話番号</label>
                <p class="modal-row">1-423-731-2712</p>
            </div>
            <div class="modal-group">
                <label for="">住所</label>
                <p class="modal-row">New Eryn876 Satterfield Stream</p>
            </div>
            <div class="modal-group">
                <label for="">建物名</label>
                <p class="modal-row">Apt. 567</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせの種類</label>
                <p class="modal-row">商品のお届けについて</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせ内容</label>
                <p class="modal-row">Alias sunt libero nulla inventore. Qui dolore aliquid reiciendis labore qui at dolores labore.</p>
            </div>
            
            <!-- 削除フォーム -->
            <div class="modal-title">
                <form action="/delete" method="post" class="delete-form">
                <input type="hidden" name="_token" value="4ieCkfI7Vj6r1iAdDvmC7iPntrivPaUm2xyep27b">                <input type="hidden" name="_method" value="DELETE">                <input type="hidden" name="id" value="5">
                <button type="submit" class="delete-btn">削除</button>    
                </form>
            </div>
            
        </div>
    </div>

        <tr>
        <td>Jenkins Gavin</td>
        <td>            その他
                    </td>
        <td>bergstrom.vesta@example.com</td>
        <td>商品のお届けについて</td>
        <td>
           <a href="#modal-6" class="detail-link">詳細</a>
        </td>
    </tr>
    
    <!-- モーダル -->
    <div id="modal-6" class="modal">
        <div class="modal-content">
            
            <a href="#" class="modal-close">⊗</a>

            

            <div class="modal-group">
                <label for="">お名前</label>
                <p class="modal-row">Jenkins Gavin</p>
            </div>
            <div class="modal-group">
                <label for="">性別</label>
                <p class="modal-row">
                    その他
                                    </p>
            </div>
            <div class="modal-group">
                <label for="">メールアドレス</label>
                <p class="modal-row">bergstrom.vesta@example.com</p>
            </div>
            <div class="modal-group">
                <label for="">電話番号</label>
                <p class="modal-row">(773) 523-9700</p>
            </div>
            <div class="modal-group">
                <label for="">住所</label>
                <p class="modal-row">Port Kelvin86278 Heller Trail Suite 013</p>
            </div>
            <div class="modal-group">
                <label for="">建物名</label>
                <p class="modal-row">Suite 158</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせの種類</label>
                <p class="modal-row">商品のお届けについて</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせ内容</label>
                <p class="modal-row">Est iure porro dolore molestias. Nobis laborum asperiores voluptate omnis.</p>
            </div>
            
            <!-- 削除フォーム -->
            <div class="modal-title">
                <form action="/delete" method="post" class="delete-form">
                <input type="hidden" name="_token" value="4ieCkfI7Vj6r1iAdDvmC7iPntrivPaUm2xyep27b">                <input type="hidden" name="_method" value="DELETE">                <input type="hidden" name="id" value="6">
                <button type="submit" class="delete-btn">削除</button>    
                </form>
            </div>
            
        </div>
    </div>

        <tr>
        <td>Gerlach Leonardo</td>
        <td>            女性
                    </td>
        <td>graham.madonna@example.org</td>
        <td>その他</td>
        <td>
           <a href="#modal-7" class="detail-link">詳細</a>
        </td>
    </tr>
    
    <!-- モーダル -->
    <div id="modal-7" class="modal">
        <div class="modal-content">
            
            <a href="#" class="modal-close">⊗</a>

            

            <div class="modal-group">
                <label for="">お名前</label>
                <p class="modal-row">Gerlach Leonardo</p>
            </div>
            <div class="modal-group">
                <label for="">性別</label>
                <p class="modal-row">
                    女性
                                    </p>
            </div>
            <div class="modal-group">
                <label for="">メールアドレス</label>
                <p class="modal-row">graham.madonna@example.org</p>
            </div>
            <div class="modal-group">
                <label for="">電話番号</label>
                <p class="modal-row">1-669-717-5095</p>
            </div>
            <div class="modal-group">
                <label for="">住所</label>
                <p class="modal-row">South Olaf455 Bosco Junction Suite 115</p>
            </div>
            <div class="modal-group">
                <label for="">建物名</label>
                <p class="modal-row">Suite 079</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせの種類</label>
                <p class="modal-row">その他</p>
            </div>
            <div class="modal-group">
                <label for="">お問い合わせ内容</label>
                <p class="modal-row">Sed ad explicabo suscipit dolorem. Praesentium quae harum illo voluptatibus. Vitae delectus nostrum consequuntur ut et.</p>
            </div>
            
            <!-- 削除フォーム -->
            <div class="modal-title">
                <form action="/delete" method="post" class="delete-form">
                <input type="hidden" name="_token" value="4ieCkfI7Vj6r1iAdDvmC7iPntrivPaUm2xyep27b">                <input type="hidden" name="_method" value="DELETE">                <input type="hidden" name="id" value="7">
                <button type="submit" class="delete-btn">削除</button>    
                </form>
            </div>
            
        </div>
    </div>

    </table>
    </div>
  </div>
</body>

</html>