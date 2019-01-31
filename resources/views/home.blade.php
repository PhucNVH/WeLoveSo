@extends('templates.default')

@section('content')
	
<div id="loading"></div>
<div id="wrapper" >
    <!--<div class="sphere-overlay"></div>-->
    <div id="container"></div>
    <div id="logo" class="parallax-front">We Love So</div>
</div>
<div id="info"></div>




<div class="o-grid__item">
    <button class="c-hamburger c-hamburger--htla">
        <span>toggle menu</span>
    </button>
</div>


<div class="content-overlay">

    <a href="./includes/loginNsignup/overall/login.php" class="join">Tham gia</a>

    <div class="credit">
        Website by <a href="http://www.lvcfund.org.vn" title="LVC Fund Group" target="_blank">LVC Fund's Group</a>
    </div>


    <div id="fullpage">
        <div class="section" id="section0">
            <div class="text-container">

                <h1><span>WE LOVE SO</span></h1>
                <h2>
                    <span class="splited-line"><span class="splited-line__wrapper">Lan tỏa</span></span>
<!--                    <span class="splited-line"><span class="splited-line__wrapper"></span></span>-->
                </h2>
                <p align="justify" >Chúng tôi lan tỏa các nhóm, tổ chức vì xã hội; các trung tâm giúp đỡ, hỗ trợ cho cộng đồng đến với mọi người. Từ đó, giúp cộng đồng mở rộng vòng tay và chia sẻ nhiều hơn.</p>
            </div>
        </div>

        <div class="section" id="section1">
            <div class="text-container">
                <h2>
                    <span class="splited-line"><span class="splited-line__wrapper">Giúp đỡ </span></span>
<!--                    <span class="splited-line"><span class="splited-line__wrapper"></span></span>-->
                </h2>
                <p align="justify">Các trung tâm, hội nhóm sẽ tiếp cận được đến những đối tượng cần sự giúp đỡ và tất nhiên cũng sẽ được nhận lại sự hỗ trợ từ cộng đồng.</p>
            </div>
        </div>

        <div class="section" id="section2">
            <div class="text-container">
                <h1><span>TÍNH NĂNG</span></h1>
                <h2>
                    <span class="splited-line"><span class="splited-line__wrapper">Mở rộng </span></span>
                    <span class="splited-line"><span class="splited-line__wrapper">yêu thương</span></span>
<!--                    <span class="splited-line"><span class="splited-line__wrapper">xung quanh ta</span></span>-->
                </h2>
                <p align="justify">Bạn có thể nhìn xem xung quanh bạn hiện đang có những tổ chức, trung tâm vì cộng dồng nào. <br> Có thể bạn sẽ dành một buổi chiều để đến thăm các bạn khiếm thị. Có thể bạn sẽ để dành một bát cháo nóng cho các bé đang bị bệnh. Hoặc bạn có thể trích ra một số tiền nhỏ tẹo để giúp một quỹ học bổng lan tỏa nhiều hơn đến những hoàn cảnh khó khăn.</p>
            </div>
        </div>

        <div class="section" id="section3">
            <div class="text-container">
<!--                <h1><span>TÍNH NĂNG</span></h1>-->
                <h2>
                    <span class="splited-line"><span class="splited-line__wrapper">Tay </span></span>
                    <span class="splited-line"><span class="splited-line__wrapper">nắm tay</span></span>
                </h2>
                <p align="justify">Mọi người có thể đóng góp những đồ dùng của mình như bàn ghế, sách cũ cho những người cần hơn; hỗ trợ các nhóm không gian tổ chức sự kiện; tìm những học bổng hỗ trợ phù hợp; liên hệ đến những trung tâm có thể giúp đỡ hoàn cảnh của bạn... <br> Hoặc quyên góp tiền trực tiếp hay gián tiếp, tham gia đồng hành lâu dài cùng những nhóm, tổ chức vì cộng đồng xung quanh chúng ta có  cùng lí tưởng với bạn.</p>
            </div>
        </div>

        <div class="section" id="section4">
            <div class="text-container">
<!--                <h1><span>TÍNH NĂNG</span></h1>-->
                <h2>
                    <span class="splited-line"><span class="splited-line__wrapper">Bảng tin </span></span>
                    <!--                    <span class="splited-line"><span class="splited-line__wrapper"></span></span>-->
                </h2>
                <p align="justify">Bảng tin của bạn sẽ có những thông tin, sự kiện mới nhất được cập nhật từ các nhóm, tổ chức cộng đồng hay các trung tâm hỗ trợ mà bạn quan tâm. Đồng thời có cả những chia sẻ của mọi người xung quanh bạn<br>Chúng tôi sử dụng những công nghệ mới nhất như Deep Learning để cập nhật bảng tin của bạn một cách phù hợp nhất.</p>
            </div>
        </div>

        <div class="section" id="section5">
            <div class="text-container">
<!--                <h1><span>TÍNH NĂNG</span></h1>-->
                <h2>
                    <span class="splited-line"><span class="splited-line__wrapper">Chia sẻ </span></span>
                    <span class="splited-line"><span class="splited-line__wrapper">của bạn </span></span>
                </h2>
                <p align="justify">Bạn có thể đăng những đồ dùng bạn có thể chia sẻ hoặc chỉ đơn giản là một bức hình bạn đã chụp cùng mọi người ở một trung tâm bạn ghé thăm chiều qua ♥.</p>
            </div>
        </div>


        <div class="section" id="section6">
            <div class="text-container">
<!--                <h1><span>TÍNH NĂNG</span></h1>-->
                <h2>
                    <span class="splited-line"><span class="splited-line__wrapper">Hợp tác </span></span>
<!--                    <span class="splited-line"><span class="splited-line__wrapper"></span></span>-->
                </h2>
                <p align="justify">Các công ty, hội nhóm, tổ chức, trung tâm có chung mục tiêu, tầm nhìn và lĩnh vực có thể cùng nhau chia sẻ thông tin, hỗ trợ và phối hợp trong công việc. Chung tay đem lại những giá trị tốt đẹp hơn cho cộng đồng.</p>
            </div>
        </div>

        <div class="section" id="section7">
            <div class="text-container">
                <!--                <h1><span>TÍNH NĂNG</span></h1>-->
                <h2>
                    <span class="splited-line"><span class="splited-line__wrapper">Tâm sự</span></span>
                </h2>
                <p align="justify">Bạn là người thích chia sẻ, thích viết và mong muốn truyền tải những thông điệp của mình để cộng đồng phát triển hơn. Chúng tôi có mục tâm sự để bạn kết nối đến mọi người, từ đó gieo những mầm cây tốt đẹp vào cộng đồng</p>
            </div>
        </div>


        <div class="section" id="section8">
            <div class="text-container">
<!--                <h1><span>HÃY ĐƯA TAY RA</span></h1>-->
                <h2>
<!--                    <span class="splited-line"><span class="splited-line__wrapper"></span></span>-->
<!--                    <span class="splited-line"><span class="splited-line__wrapper"></span></span>-->
                </h2>

<!--                <p></p>-->

                <video  width="820" height="560" controls >
                    <source src="./assets/videos/welcome.mp4?autoplay=0" type="video/mp4">
                    <source src="./assets/videos/welcome.mp4?autoplay=0" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

        <div class="section" id="section9">
            <div class="text-container">
                <h1><span>CHÚNG TÔI</span></h1>
                <h2>
                    <span class="splited-line"><span class="splited-line__wrapper">Là </span></span>
                </h2>
                <p>Một nhóm nhỏ thuộc Quỹ Hỗ trợ Tài năng Lương Văn Can.<br></p>
            </div>
        </div>

    </div>


</div>
@stop