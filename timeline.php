
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>12AM</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style2.css">

  
</head>

<body>
  <section id=timeline>
	<h1>12AM's Timeline</h1>
	<p class="leader">Welcome to our Album</p>
	<div class="demo-card-wrapper">
		<div class="demo-card demo-card--step1">
			

		<?php
        require "databaseconfig.php";
        
        $sql = "SELECT * from photostory";
        $result = mysqli_query($conn, $sql);
        if(!$result){
        die( "Can't query data".mysqli_error($conn) );
        }
        if(mysqli_num_rows($result)>0){
       while($row = mysqli_fetch_assoc($result)) {	
        echo "<div class='head'>";
        echo "<div class='number-box' >";
        echo "<span>01</span>";
        echo "</div>";
        echo "<h2>";
        //echo "<span class='small'>";
       // echo "</span>".$row["Title"]"</h2>";

        echo "<span>".$row["Title"]."</span>";
         echo "</h2>";
        echo "</div>";
        echo "<div class='body'>";
        echo "<p>".$row["Description"]."</p>";
        echo "<table>";
        echo "<tr>";
        echo "<td><img src='".$row["Image"]."' alt='Graphic'></td> ";

        echo "<td><img src='".$row["Image"]."' alt='Graphic' style ='margin-left: 40px'></td>";


        echo "</tr>";

        echo "<tr >";
        echo "<td><img src='".$row["Image"]."' alt='Graphic'style ='margin-top:20px'></td> ";

        echo "<td><img src='".$row["Image"]."' alt='Graphic' style ='margin-left: 40px'></td>";


        echo "</tr>";

        echo "</table>";
        echo "</div>";
        echo "</div>";
		}
         } else {
        echo "0 results";
        }
        
       
        
        mysqli_close($conn);
        
        // 3. Kết thúc bảng
        ?>




				

		<div class="demo-card demo-card--step2">
			<div class="head">
				<div class="number-box">
					<span>02</span>
				</div>
				<h2><span class="small"></span> Nhà nổi tại Hạ Long</h2>
			</div>
			<div class="body">
				<p>Hàng trăm ngôi nhà nổi trên vịnh, giữa những dãy núi đá vôi tạo nên cảnh quan tuyệt đẹp. Đây là phần nối liền giữa vịnh Lan Hạ và vịnh Hạ Long, địa danh đã được bình chọn là kỳ quan thiên nhiên thế giới.</p>
				<img src="a.jpg">
			</div>
		</div>

		<div class="demo-card demo-card--step3">
			<div class="head">
				<div class="number-box">
					<span>03</span>
				</div>
				<h2><span class="small"></span> Sơn La</h2>
			</div>
			<div class="body">
				<p>Một cung đường ở Sơn La. "Mỗi khi thấy dáng hình chữ S, trong tôi lại trào dâng cảm xúc về quê hương đất nước tươi đẹp. Tôi mong muốn cho quê hương thanh bình và no ấm, khát khao cho Tổ quốc tôi mãi hòa bình", tác giả Đức Thành chia sẻ. </p>
				<img src="b.jpg" alt="Graphic">
			</div>
		</div>

		<div class="demo-card demo-card--step4">
			<div class="head">
				<div class="number-box">
					<span>04</span>
				</div>
				<h2><span class="small"></span> Hà Giang</h2>
			</div>
			<div class="body">
				<p>Bản Phùng ở Hoàng Su Phì (Hà Giang). "Tôi ấn tượng bởi trong một buổi sớm mai đã chứng kiến được khung cảnh đẹp đẽ của bản Phùng, thức giấc với lúa vàng đang độ thu hoạch. Mây như ôm ấp bản làng, phía chân trời hừng lên một bình minh tươi sáng.</p>
				<img src="c.jpg" alt="Graphic">
			</div>
		</div>

		<div class="demo-card demo-card--step5">
			<div class="head">
				<div class="number-box">
					<span>05</span>
				</div>
				<h2><span class="small"></span> Đà Nẵng</h2>
			</div>
			<div class="body">
				<p>Cầu Rồng (Đà Nẵng) trong một đêm giông. Đây là cây cầu thứ 6 bắc qua sông Hàn, dài 666 m, rộng 37,5 m, 6 làn xe chạy, hoạt động từ tháng 3/2013, kinh phí xây cầu gần 1,5 nghìn tỷ đồng.</p>
				<img src="d.jpg" alt="Graphic">
			</div>
		</div>

		<div class="demo-card demo-card--step6">
			<div class="head">
				<div class="number-box">
					<span>06</span>
				</div>
				<h2><span class="small" ></span> Mùa cỏ hồng Đà Lạt </h2>
			</div>
			<div class="body">
				<p> Mùa nào thức nấy, mùa hoa cải trắng tinh khôi, mùa hoa dã quỳ vàng rực, mùa hoa phượng tím… Nhưng không thể không nhắc đến loài cỏ hồng – loài cỏ dại mọc thấp nằm e ấp dưới các tán rừng thông đắm mình trong sương sớm níu chân biết bao người lữ khách.</p>
				<img src="cohong.jpg" alt="Graphic">
			</div>
		</div>



    s
	</div>
</section>
  
  
</body>
</html>
