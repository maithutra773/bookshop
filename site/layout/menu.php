<div class="container">
      <ul class="menu ">
            <li><a href="<?=$SITE_URL?>/trang-chinh?trang-chu">Trang chủ</a></li>
            <li><a href="<?=$SITE_URL?>/trang-chinh?gioi-thieu">Giới thiệu</a></li>
            <li><a href="<?=$SITE_URL?>/trang-chinh?lien-he">Liên hệ</a></li>
            <li><a href="<?=$SITE_URL?>/trang-chinh?gop-y">Góp ý</a></li>
            <li><a href="<?=$SITE_URL?>/trang-chinh?hoi-dap">Hỏi đáp</a></li>
      </ul>
      <style>
      .menu_main {
    margin-top: 50px;
    background-color: rgb(255, 251, 251);
    height: 3em;
    display: block;
    margin-bottom: 10px;
      }

      .menu {
      list-style: none;
      line-height: 3em;
      text-align: center;
      }

      .menu>li {
      display: inline-table;
      padding: 0px 30px;
      position: relative;
      }

      .menu>li>a {
      text-decoration: none;
      color: rgb(15, 15, 15);
      font-weight: bold;

      }

      .menu>li:hover {
      background-color: red;
      height: 3em;
      }

      .menu>li::before {
      position: absolute;
      bottom: 30%;
      left: 18%;
      content: '';
      height: 2px;
      background-color: yellow;
      width: 0%;
      transition: 0.9s;
      }

      .menu>li:hover::before {
      width: 65%;
      }
      </style>
</div>