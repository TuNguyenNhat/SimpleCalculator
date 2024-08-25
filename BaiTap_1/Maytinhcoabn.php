<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>May tinh co ban</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="khoitong">

        <div class="phantren">
            <h2>May Tinh Don Gian</h2>
            <form action="" method="POST">
                <p class="p">May tinh</p>
                <div class="noidung">
                    <div class="phantren_bentrai">
                        <label for="sothunhat">So thu nhat</label>
                        <label for="pheptinh">Phep tinh</label>
                        <label for="sothuhai">So thu hai</label>
                    </div>

                    <div class="phantren_benphai">
                        <input type="text" name="sothunhat">
                        <select name="chonpheptinh" id="chonpheptinh" required>
                            <option value="Luachon">Chon</option>
                            <option value="Cong">Cong</option>
                            <option value="Tru">Tru</option>
                            <option value="Nhan">Nhan</option>
                            <option value="Chia">Chia</option>
                        </select>
                        <input type="text" name="sothuhai">
                    </div>
                </div>

                <div class="phannut_KQ">
                    <input type="submit" name="submit" value="Tinh">
                </div>
            </form>
        </div>

        <div class="phanduoi">
            <h2>Ket Qua</h2>
            <p class="p2">
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $soA = (float)$_POST['sothunhat'];
                    $soB = (float)$_POST['sothuhai'];
                    $chonphepTinh = $_POST['chonpheptinh'];
                    $ketqua = 0;

                    switch($chonphepTinh){
                        case "Cong":
                            $ketqua = $soA + $soB;
                            echo(number_format($soA, 1) .' + ' .number_format($soB, 1) .' = ' .number_format($ketqua, 1));
                            break;
                        case "Tru":
                            $ketqua = $soA - $soB;
                            echo(number_format($soA, 1) .' - ' .number_format($soB, 1) .' = ' .number_format($ketqua, 1));
                            break;
                        case "Nhan":
                            $ketqua = $soA * $soB;
                            echo(number_format($soA, 1) .' x ' .number_format($soB, 1) .' = ' .number_format($ketqua, 1));
                            break;
                        case "Chia":
                            if($soB == 0){
                                echo("Moi nhap so thu hai khac 0 hmmmm");
                                break;
                            }
                            $ketqua = $soA / $soB;
                            echo(number_format($soA, 1) .' : ' .number_format($soB, 1) .' = ' .number_format($ketqua, 1));
                            break;
                    }
                }   
                ?>
            </p>
        </div>

    </div>
</body>
</html>