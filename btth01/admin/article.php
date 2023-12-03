<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="category.php">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="author.php">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="article.php">Bài viết</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

    </header>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="add_category.php" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên bài viết</th>
                            <th scope="col">Mô tả</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Lòng mẹ</td>
                            <td>
                                Và mẹ ơi đừng khóc nhé! Cả đời này mẹ đã khóc nhiề...
                            </td>
                            <td>
                                <a href="edit_category.php?id=1"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Vết mưa</td>
                            <td>
                                Cảm ơn em đã cho anh những tháng ngày hạnh phúc, c..
                            </td>
                            <td>
                                <a href="edit_category.php?id=2"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr> 
                        <tr>
                            <th scope="row">3</th>
                            <td>Phôi pha</td>
                            <td>
                                Đêm nay, trời quang mây tạnh, trong người nghe hoa...       
                            </td>
                            <td>
                                <a href="edit_category.php?id=2"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr> 
                        <tr>
                            <th scope="row">4</th>
                            <td>Quê hương</td>
                            <td>
                                Quê hương là gì mà chở đầy kí ức nhỏ xinh. Có đám ...
                            </td>
                            <td>
                                <a href="edit_category.php?id=2"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>   
                        <tr>
                            <th scope="row">5</th>
                            <td>Đất nước</td>
                            <td>
                                Đã bao nhiêu lần tôi tự hỏi: liệu trên Thế giới nà...
                            </td>
                            <td>
                                <a href="edit_category.php?id=2"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr> 
                        <tr>
                            <th scope="row">6</th>
                            <td>Hard Rock Hallelujah</td>
                            <td>
                                Những linh hồn đang lạc lối, mù quáng mất phương h...
                            </td>
                            <td>
                                <a href="edit_category.php?id=2"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr> 
                        <tr>
                            <th scope="row">7</th>
                            <td>The Unforgiven</td>
                            <td>
                                Lâu lắm rồi mới nghe lại The Unforgiven II, vì bài...
                            </td>
                            <td>
                                <a href="edit_category.php?id=2"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr> 
                        <tr>
                            <th scope="row">8</th>
                            <td>Nơi tình yêu bắt đầu</td>
                            <td>
                                Nhiều người sẽ nghĩ làm gì có yêu nhất và làm gì c...
                            </td>
                            <td>
                                <a href="edit_category.php?id=2"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>    
                        <tr>
                            <th scope="row">9</th>
                            <td>Love Me Like There's No Tomorrow </td>
                            <td>
                                Nếu ai đã từng yêu Queen, yêu cái chất giọng cao, ...
                            </td>
                            <td>
                                <a href="edit_category.php?id=2"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr> 
                        <tr>
                            <th scope="row">10</th>
                            <td>I'm stronger</td>
                            <td>
                                Em không phải là người giỏi giấu cảm xúc, nhưng em...
                            </td>
                            <td>
                                <a href="edit_category.php?id=2"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr> 
                        <tr>
                            <th scope="row">11</th>
                            <td>Ôi Cuộc Sống Mến Thương</td>
                            <td>
                                Có một câu nói như thế này "Âm nhạc là một cái gì ...
                            </td>
                            <td>
                                <a href="edit_category.php?id=2"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr> 
                        <tr>
                            <th scope="row">12</th>
                            <td>Cây và gió</td>
                            <td>
                                Em và anh, hai đứa quen nhau thật tình cờ. Lời hát...
                            </td>
                            <td>
                                <a href="edit_category.php?id=2"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr> 
                        <tr>
                            <th scope="row">13</th>
                            <td>Người thầy</td>
                            <td>
                                Ánh nắng cuối ngày rồi cũng sẽ tắt, dòng sông con ...
                            </td>
                            <td>
                                <a href="edit_category.php?id=2"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>                
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>