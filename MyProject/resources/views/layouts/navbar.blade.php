<!-- .navbar-expand-{sm|md|lg|xl}決定在哪個斷點以上就出現漢堡式選單 -->
<!-- navbar-dark 文字顏色 .bg-dark 背景顏色 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!--導覽列樣式-->

    <!-- .navbar-brand 左上位置 -->
    <a class="navbar-brand">
        <span class="font1" class="h1 mx-1" style="font-size:48px;white-space:nowrap;">NFU</span>
        <span class="font2" class="h1 mx-1" style="font-size:32px;font-style:italic;">線上選課系統</span>
    </a>
    <!-- .navbar-toggler 選單按鈕 -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <!-- .navbar-toggler-icon 選單Icon -->
        <span class="navbar-toggler-icon" style="font-size: 50px" ></span>
    </button>
    <!-- .collapse.navbar-collapse 用於外層中斷點群組和隱藏導覽列內容 -->
    <!-- 選單項目&漢堡式折疊選單 -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size:32px">
        <ul class="navbar-nav mr-auto">
            <!-- active表示當前頁面 -->
            
            <!--backup active
            
            <li class="nav-item active">
                <a class="nav-link font2" href="#">查看菜單</a>
                <span class="sr-only">(current)</span></a>
            </li>
            -->
            <li class="nav-item active">
                <a class="nav-link font2" href="#">預選功課表</a>
                <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link font2" href="login.html">預選課程列表</a>
            </li>
            <!-- .dropdown Navbar選項使用下拉式選單 -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle font2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">備註s</a>
                <!-- .dropdown-menu 下拉選單內容 -->
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="font-size:32px">
                    <a class="dropdown-item font2" href="#">備註1</a>
                    <a class="dropdown-item font2" href="#">備註2</a>
                </div>
            </li>
        </ul>
    </div>  
</nav>