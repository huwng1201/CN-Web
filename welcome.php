<?php 
// TODO 1: Khởi động session (BẮT BUỘC ở mọi trang cần dùng SESSION) 
session_start(); // Phải gọi để truy cập vào $_SESSION

// TODO 2: Kiểm tra xem SESSION (lưu tên đăng nhập) có tồn tại không? 
// Kiểm tra đúng tên SESSION đã đặt ở handle_login.php ('user_login')
if (isset($_SESSION['user_login'])) {
    
    // TODO 3: Nếu tồn tại, lấy username từ SESSION ra 
    $loggedInUser = $_SESSION['user_login'];
    
    // TODO 4: In ra lời chào mừng 
    echo "<h1>Chào mừng trở lại, $loggedInUser!</h1>";  
    echo "<p>Bạn đã đăng nhập thành công.</p>"; 
    
    // TODO 5: (Tạm thời) Tạo 1 link để "Đăng xuất" (chỉ là quay về login.html) 
    // Lưu ý: Trong thực tế, bạn nên tạo một file logout.php để xóa SESSION
    echo '<a href="login.html">Đăng xuất (Tạm thời)</a>'; 
    
} else {
    
    // TODO 6: Nếu không tồn tại SESSION (chưa đăng nhập) 
    // Chuyển hướng người dùng về trang login.html 
    header('Location: login.html');
    exit; // Dừng script
} 
?>