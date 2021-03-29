<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>home</title>

        <!-- Fonts -->
        <link href="{{asset('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap')}}" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
          <link href="/css/app.css" rel="stylesheet">
       
    </head>
    <body class="antialiased">
        <header class="w-10/12 flex mx-auto">
            <div class="py-2 w-32 ">
            <a href="#">abc <img src="{{asset('/images/logo.jpg')}}" alt=""></a>
            </div>
            <div class="w-11/12">
                <div class="ml-20">
                <ul class="flex float-left">
                    <li class="text-lg px-2 py-2"><a href="#"> ƯU ĐÃI 30SHINE</a></li>
                    <li class="text-lg px-2 py-2"><a href="#"> DỊCH VỤ </a></li>
                    <li class="text-lg px-2 py-2"><a href="#"> 30SHINE STORE</a></li>
                    <li class="text-lg px-2 py-2"><a href="#"> KHÁM PHÁ KIỂU TÓC</a></li>
                    <li class="text-lg px-2 py-2"><a href="#"> BLOG</a></li>
                    <li class="text-lg px-2 py-2"><a href="#"> SHINE MEMBER</a></li>
                </ul>
            </div>
            </div>
            <div class="my-2 ml-8">
                <button class="bg-yellow-400 rounded-md w-32 h-8 font bold ">Đăng nhập</button>
            </div>
        </header>
        
        <div>
            <img src="https://storage.30shine.com/banner/210202_Banner_TopUp_w.jpg" alt="">
        </div>
        <div>
            <div class="flex w-11/12 mx-auto justify-between">
            <div>
            <span class="text-3xl font-bold">
                Dịch vụ 30shine
            </span><br>
            <span class="text-gray-500 text-lg font">Thư giãn 30 phút giúp bạn tỏa sáng</span>
            </div>
            <div>
                <span><a href="#" class="text-lg italic underline">Các dịch vụ khác</a></span>
            </div>
        </div>
        <div class="w-11/12 mx-auto">
            <img class="w-full" src="https://storage.30shine.com/banner/20210319_BannerService_80K_w.jpg" alt="">
        </div>
                <div class="w-11/12 mx-auto grid grid-cols-4  my-12 gap-8">
                    <section class="flex">
                        <div>
                            <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/service/30shine-cat-goi-massage-2.jpg" alt="">

                        </div>
                        <div class="ml-4">
                            <a href="#">
                                <span class="text-lg font-bold">Cắt gội massage</span><br>
                                <span>Bảng giá 2021 (Hấp dẫn)</span>
                            </a>
                        </div>
                    </section>
                    <section class="flex">
                        <div>
                            <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/service/30shine-cat-goi-massage-2.jpg" alt="">

                        </div>
                        <div class="ml-4">
                            <a href="#">
                                <span class="text-lg font-bold">Cắt gội massage</span><br>
                                <span>Bảng giá 2021 (Hấp dẫn)</span>
                            </a>
                        </div>
                    </section>
                    <section class="flex">
                        <div>
                            <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/service/30shine-cat-goi-massage-2.jpg" alt="">

                        </div>
                        <div class="ml-4">
                            <a href="#">
                                <span class="text-lg font-bold">Cắt gội massage</span><br>
                                <span>Bảng giá 2021 (Hấp dẫn)</span>
                            </a>
                        </div>
                    </section>
                    <section class="flex">
                        <div>
                            <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/service/30shine-cat-goi-massage-2.jpg" alt="">

                        </div>
                        <div class="ml-4">
                            <a href="#">
                                <span class="text-lg font-bold">Dịch vụ khác</span><br>
                                <span>Bảng giá 2021 (Hấp dẫn)</span>
                            </a>
                        </div>
                    </section>
                </div>
                <div class="w-11/12 mx-auto justify-between flex">
                    <div class="">
                        <span class="text-3xl font-bold">
                            ƯU ĐÃI - QUÀ TẶNG 30SHINE
                        </span><br>
                        <span class="text-gray-500 text-lg font">Hàng ngàn ưu đãi hấp dẫn đang chờ</span>
                    </div>
                    <div>
                        <a href="#" class="text-lg italic underline">Các ưu đãi khác</a>
                    </div>
                </div>
                <div class="w-11/12 mx-auto grid grid-cols-3  my-12 gap-8">
                    <div>
                        <a href="#">
                        <div>
                            <img class="w-11/12" src="https://30shine-store-images.s3.ap-southeast-1.amazonaws.com/uploads/small_1080x1080_Banner_CTBH_T01_B4_4c10357c19.jpg" alt="">
                        </div>
                        <div>
                            <span class="font-bold">Giảm giá độc quyền SRM Acsys 2021</span>
                        </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                        <div>
                            <img class="w-11/12" src="https://30shine-store-images.s3.ap-southeast-1.amazonaws.com/uploads/small_1080x1080_Banner_CTBH_T01_B4_4c10357c19.jpg" alt="">
                        </div>
                        <div>
                            <span class="font-bold">Giảm giá độc quyền SRM Acsys 2021</span>
                        </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                        <div>
                            <img class="w-11/12" src="https://30shine-store-images.s3.ap-southeast-1.amazonaws.com/uploads/small_1080x1080_Banner_CTBH_T01_B4_4c10357c19.jpg" alt="">
                        </div>
                        <div>
                            <span class="font-bold">Giảm giá độc quyền SRM Acsys 2021</span>
                        </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="w-11/12 mx-auto justify-between flex">
                      <div class="">
                        <span class="text-3xl font-bold">
                            30SHINE STORE
                        </span><br>
                        <span class="text-gray-500 text-lg font">Số 1 mỹ phẩm về nam</span>
                      </div>
                      <div>
                        <a href="#" class="text-lg italic underline">Xem tât cả</a>
                      </div>
                    </div>
                    
                </div>
                <div class="w-11/12 mx-auto">
                    <img class="w-full" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/30Shine-store-banner-2.jpg" alt="">
                </div>
                <div class="w-11/12 mx-auto my-2 flex justify-between">
                    <div>
                    <span class="font-bold">Top sản phẩm nổi bật</span>
                    </div>
                    <div class="flex gap-4">
                        <div>
                            <button class="bg-black text-white w-12 h-12 rounded-full"><</button>
                        </div>
                        <div>
                            <button class="bg-black text-white w-12 h-12 rounded-full">></button>
                        </div>
                    </div>
                </div>
                <div class="w-11/12 mx-auto grid grid-cols-4  my-12  ">
                    <section>
                        <div>
                        <img class="w-64" src="https://product.hstatic.net/1000306701/product/box77_cb5f13f87b734bbd9bda11c65b5eb167.jpg" alt="">
                        </div>
                        <div>
                            Glanzen Box Tạo Kiểu Basic <br> 1
                        </div>
                        <div class="my-4">
                            <span class="text-lg font-bold">399.000 ₫</span>
                            <span class="line-through">653.000 ₫</span>
                        </div>
                        <div>
                            <button class="w-64 bg-yellow-400 hover:bg-yellow-300"><a href="#">Mua Ngay</a></button>
                        </div>
                    </section>
                    <section>
                        <div>
                        <img class="w-64" src="https://product.hstatic.net/1000306701/product/box77_cb5f13f87b734bbd9bda11c65b5eb167.jpg" alt="">
                        </div>
                        <div>
                            Glanzen Box Tạo Kiểu Basic <br> 1
                        </div>
                        <div class="my-4">
                            <span class="text-lg font-bold">399.000 ₫</span>
                            <span class="line-through">653.000 ₫</span>
                        </div>
                        <div>
                            <button class="w-64 bg-yellow-400 hover:bg-yellow-300"><a href="#">Mua Ngay</a></button>
                        </div>
                    </section>
                    <section>
                        <div>
                        <img class="w-64" src="https://product.hstatic.net/1000306701/product/box77_cb5f13f87b734bbd9bda11c65b5eb167.jpg" alt="">
                        </div>
                        <div>
                            Glanzen Box Tạo Kiểu Basic <br> 1
                        </div>
                        <div class="my-4">
                            <span class="text-lg font-bold">399.000 ₫</span>
                            <span class="line-through">653.000 ₫</span>
                        </div>
                        <div>
                            <button class="w-64 bg-yellow-400 hover:bg-yellow-300"><a href="#">Mua Ngay</a></button>
                        </div>
                    </section>
                    <section>
                        <div>
                        <img class="w-64" src="https://product.hstatic.net/1000306701/product/box77_cb5f13f87b734bbd9bda11c65b5eb167.jpg" alt="">
                        </div>
                        <div>
                            Glanzen Box Tạo Kiểu Basic <br> 1
                        </div>
                        <div class="my-4">
                            <span class="text-lg font-bold">399.000 ₫</span>
                            <span class="line-through">653.000 ₫</span>
                        </div>
                        <div>
                            <button class="w-64 bg-yellow-400 hover:bg-yellow-300"><a href="#">Mua Ngay</a></button>
                        </div>
                    </section>
                </div>
                <div class="bg-black">
                <div >
                    <div class="w-11/12 mx-auto justify-between flex bg-black">
                      <div class="">
                        <span class="text-3xl font-bold text-white">
                            HỆ THỐNG 81 SALON
                        </span><br>
                        <span class="text-gray-500 text-lg font">Giờ mở cửa: T2-T6(8h30-20h30) | T7,CN(7h30-23h30) </span>
                      </div>
                      <div>
                        <a href="#" class="text-lg italic underline text-gray-500">Xem tât cả</a>
                      </div>
                    </div>
                    
                 </div>
                  <div class="w-11/12 mx-auto">
                    <img class="w-full" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/30Shine-store-banner-2.jpg" alt="">
                   </div>
                   <div>
                       <div class="h-40">
                    <div class="w-11/12 mx-auto grid grid-cols-4  my-12 gap-8">
                        <section class="flex">
                            <div>
                                <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/salon-hcm.png" alt="">
    
                            </div>
                            <div class="ml-4">
                                <a href="#">
                                    <span class="text-lg font-bold text-white">TP.Hồ Chí Minh</span><br>
                                    <span class="text-white">40 salon</span>
                                </a>
                            </div>
                        </section>
                        <section class="flex">
                            <div>
                                <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/salon-hanoi.png" alt="">
    
                            </div>
                            <div class="ml-4">
                                <a href="#">
                                    <span class="text-lg font-bold text-white">Hà Nội</span><br>
                                    <span class="text-white">18 salon</span>
                                </a>
                            </div>
                        </section>
                        <section class="flex">
                            <div>
                                <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/salon-danang.png" alt="">
    
                            </div>
                            <div class="ml-4">
                                <a href="#">
                                    <span class="text-lg font-bold text-white">Đà nẵng</span><br>
                                    <span class="text-white">1 salon</span>
                                </a>
                            </div>
                        </section>
                        <section class="flex">
                            <div>
                                <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/salon-other.png" alt="">
    
                            </div>
                            <div class="ml-4">
                                <a href="#">
                                    <span class="text-lg font-bold text-white">Các tỉnh thành khác</span><br>
                                    <span class="text-white">22 salon</span>
                                </a>
                            </div>
                        </section>
                    </div>
                    </div>
                   </div>
                </div>
                <div class="w-11/12 mx-auto justify-between flex">
                    <div class="">
                        <span class="text-3xl font-bold">
                            LOOKBOOK
                        </span><br>
                        <span class="text-gray-500 text-lg font">Bí quyết đẹp trai 30shine</span>
                    </div>
                    <div>
                        <a href="#" class="text-lg italic underline">Xem tất cả</a>
                    </div>
                </div>
                <div class="w-11/12 mx-auto grid grid-cols-2  my-12 gap-8">
                    <div>
                        <a href="#">
                        <div>
                            <img class="w-full" src="https://storage.30shine.com/ResourceWeb/data/images/lookbook/thumbnail/dynamic-style.jpg" alt="">
                        </div>
                        <div>
                            <span class="font-bold">Diện Mạo Khỏe Khoắn Đầy Nam Tính Cùng 4 Kiểu Tóc Trong "Bứt Phá" Collection Của 30Shine</span>
                        </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                        <div>
                            <img class="" src="https://storage.30shine.com/ResourceWeb/data/images/lookbook/thumbnail/genz-style.jpg" alt="">
                        </div>
                        <div>
                            <span class="font-bold">Khẳng Định Cá Tính Bản Thân Cùng 8 Kiểu Tóc Cực Phong Cách Trong "Bùng Nổ" Collection Từ 30Shine</span>
                        </div>
                        </a>
                    </div>
                    
                </div>
                <div class="w-11/12 mx-auto justify-between flex">
                    <div class="">
                        <span class="text-3xl font-bold">
                            Người nổi tiếng đồng hành cùng 30shine
                        </span><br>
                        <span class="text-gray-500 text-lg font">Bí quyết đẹp trai 30Shine</span>
                    </div>
                    
                </div>
                <div class="w-11/12 mx-auto grid grid-cols-2  my-12 gap-8">
                    <div>
                        <a href="#">
                        <div>
                            <img class="w-full" src="https://storage.30shine.com/banner/20210225_Da+LAB.jpg" alt="">
                        </div>
                        
                        </a>
                    </div>
                    <div>
                        <a href="#">
                        <div>
                            <img class="" src="https://storage.30shine.com/banner/20210225_Dinh+Trong.jpg" alt="">
                        </div>
                       
                        </a>
                    </div>
                    
                </div>
                <div class="w-11/12 mx-auto justify-between flex">
                    <div class="">
                        <span class="text-3xl font-bold">
                            SHINE MEMBER
                        </span><br>
                        <span class="text-gray-500 text-lg font">Thành viên 30Shine, tưng bừng ưu đãi</span>
                    </div>
                    <div>
                        <a href="#" class="text-lg italic underline">Các ưu đãi khác</a>
                    </div>
                </div>
                <div class="w-11/12 mx-auto grid grid-cols-3  my-12 gap-8">
                    <div>
                        <a href="#">
                        <div>
                            <img class="w-11/12" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/bsg.jpg" alt="">
                        </div>
                        <div>
                            <span class="font-bold">Black/Silver/Gold</span>
                        </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                        <div>
                            <img class="w-11/12" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/shine-topup.jpg" alt="">
                        </div>
                        <div>
                            <span class="font-bold">TOPUP</span>
                        </div>
                        </a>
                    </div>
                </div>
                    <div class="my-20">
                        <div class="w-11/12 mx-auto justify-between flex">
                          <div class="">
                            <span class="text-3xl font-bold">
                               CAM KẾT 30SHINE CARE 
                            </span><br>
                            <span class="text-gray-500 text-lg font">Chất lượng hàng đầu,hậu mãi dài lâu</span>
                          </div>
                          
                        </div>
                        
                    </div>
                    <div class="w-11/12 mx-auto">
                        <img class="w-full" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/banner-shinecare.jpg" alt="">
                    </div>
         </div>
         <footer class=" bg-black mt-20 h-40">
             <div class="grid grid-cols-2 w-11/12 mx-auto">
             <div>
                 <span class="text-white">THÔNG TIN LIÊN HỆ</span><br>
                 <span class="text-white">Địa chỉ: số 1, Trịnh Văn - Hà Nội   </span><br>
                 <span class="text-white">Hotline: 0962.370.557</span><br>
                 <span class="text-white">Email: hieupvph12651@fpt.edu.vn</span>
             </div>
             <div>
                 <span class="text-white">ĐĂNG KÍ NHẬN TIN</span><br>
                 <span class="text-white">Để lại email để nhận các chương trình khuyến mãi</span>
                 <form action="#">
                     <input type="text">
                     <button class="text-white border-2 border-gray-200">Đăng kí</button>
                 </form>
             </div>
             </div>
         </footer>
    </body>
</html>
