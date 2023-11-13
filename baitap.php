<?php
function findMinMax($arr) {
    $min = $arr[0]; // Giả sử phần tử đầu tiên là giá trị nhỏ nhất
    $max = $arr[0]; // Giả sử phần tử đầu tiên là giá trị lớn nhất

    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i]; // Cập nhật giá trị nhỏ nhất
        }
        if ($arr[$i] > $max) {
            $max = $arr[$i]; // Cập nhật giá trị lớn nhất
        }
    }

    return array('min' => $min, 'max' => $max);
}

// Mảng đầu vào
$numbers = array(5, 2, 9, 1, 7, 3);

// Tìm giá trị nhỏ nhất và lớn nhất trong mảng
$result = findMinMax($numbers);

// In kết quả
echo "Giá trị nhỏ nhất: " . $result['min'] . "<br>";
echo "Giá trị lớn nhất: " . $result['max'];
echo "<br>";
?>

// Bài 6:
<?php
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap $arr[$j] and $arr[$j+1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// Mảng ban đầu
$myArray = [5, 3, 8, 2, 1, 4];

// Sắp xếp mảng theo thứ tự tăng dần
$sortedArray = bubbleSort($myArray);

// In mảng sau khi sắp xếp
foreach ($sortedArray as $value) {
    echo $value . " ";
}
echo "<br>";
?>
//Bai 7:
<?php
function tinhGiaiThua($n) {
    if ($n < 0) {
        return "Số nguyên không hợp lệ";
    } elseif ($n == 0) {
        return 1;
    } else {
        $giaiThua = 1;
        for ($i = 1; $i <= $n; $i++) {
            $giaiThua *= $i;
        }
        return $giaiThua;
    }
}

// Số nguyên dương cần tính giai thừa
$soNguyenDuong = 5;

// Gọi hàm tinhGiaiThua và in kết quả
$ketQua = tinhGiaiThua($soNguyenDuong);
echo "Giai thừa của $soNguyenDuong là: $ketQua";
echo "<br>";
?>
//Bai 8:
<?php
function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    
    return true;
}

function findPrimesInRange($start, $end)
{
    $primes = [];
    
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    
    return $primes;
}

$start = 1; // Điểm bắt đầu của khoảng
$end = 100; // Điểm kết thúc của khoảng

$result = findPrimesInRange($start, $end);

echo "Các số nguyên tố từ $start đến $end là: ";
echo implode(", ", $result);
echo "<br>";
?>
//Bai 9:
<?php
// Mảng đầu vào
$numbers = [1, 2, 3, 4, 5];

// Khởi tạo biến tổng
$sum = 0;

// Lặp qua các phần tử trong mảng và cộng vào tổng
foreach ($numbers as $number) {
    $sum += $number;
}

// In ra tổng
echo "Tổng của các số trong mảng là: " . $sum;
echo "<br>";
?>
//Bai 10:
<?php
function printFibonacci($n)
{
    $first = 0;
    $second = 1;

    echo "Các số Fibonacci trong khoảng từ 0 đến $n là: ";

    echo $first . " " . $second . " ";

    while ($second <= $n) {
        $next = $first + $second;
        echo $next . " ";
        $first = $second;
        $second = $next;
    }
}

// Sử dụng hàm để in ra các số Fibonacci trong khoảng từ 0 đến 100
printFibonacci(100);
echo "<br";
?>
//Bai 11:
<?php
function isArmstrongNumber($number)
{
    $sum = 0;
    $temp = $number;

    // Đếm số chữ số
    $numDigits = strlen((string) $number);

    // Tính tổng lập phương của các chữ số
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int) ($temp / 10);
    }

    // Kiểm tra xem số có phải là số Armstrong hay không
    if ($number == $sum) {
        return true;
    } else {
        return false;
    }
}

// Test với một số
$number = 153;
if (isArmstrongNumber($number)) {
    echo "$number là một số Armstrong.";
} else {
    echo "$number không phải là số Armstrong.";
}
echo "<br>";
?>
//Bai 12
<?php
function insertElement($array, $element, $position) {
    // Kiểm tra vị trí chèn có hợp lệ hay không
    if ($position < 0 || $position > count($array)) {
        echo "Vị trí chèn không hợp lệ!";
        return $array;
    }

    // Tạo mảng mới để chứa kết quả
    $result = [];

    // Chèn phần tử vào vị trí mong muốn
    for ($i = 0; $i < count($array); $i++) {
        if ($i == $position) {
            $result[] = $element;
        }
        $result[] = $array[$i];
    }

    // Trường hợp vị trí chèn là cuối mảng
    if ($position == count($array)) {
        $result[] = $element;
    }

    return $result;
}

// Mảng ban đầu
$array = [1, 2, 3, 4, 5];

// Phần tử cần chèn
$element = 10;

// Vị trí chèn
$position = 2;

// Chèn phần tử vào mảng
$result = insertElement($array, $element, $position);

// In kết quả
print_r($result);
echo "<br>";
?>
//Bai 13: 
<?php
function removeDuplicates($arr) {
    $result = array();
    foreach ($arr as $value) {
        if (!in_array($value, $result)) {
            $result[] = $value;
        }
    }
    return $result;
}

// Mảng ban đầu có các phần tử trùng lặp
$myArray = array(1, 2, 3, 4, 2, 3, 5);

// Loại bỏ các phần tử trùng lặp
$uniqueArray = removeDuplicates($myArray);

// In mảng sau khi loại bỏ các phần tử trùng lặp
print_r($uniqueArray);
echo "<br>";
?>
//Bai 14: 
<?php
function findElementPosition($array, $element) {
    $position = array_search($element, $array);
    
    if ($position !== false) {
        return $position;
    } else {
        return -1; // Trả về -1 nếu không tìm thấy phần tử trong mảng
    }
}

// Mảng ví dụ
$myArray = array(1, 2, 3, 4, 5, 6, 7);

// Tìm vị trí của phần tử 4 trong mảng
$elementToFind = 4;
$position = findElementPosition($myArray, $elementToFind);

if ($position !== -1) {
    echo "Vị trí của phần tử $elementToFind là $position";
} else {
    echo "Không tìm thấy phần tử $elementToFind trong mảng";
}
echo "<br>";    
?>
//Bai 15:
<?php
function reverseString($str) {
    $length = strlen($str);
    $reversedString = '';
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedString .= $str[$i];
    }
    
    return $reversedString;
}

// Sử dụng hàm để đảo ngược chuỗi
$originalString = "Hello, World!";
$reversedString = reverseString($originalString);

echo "Chuỗi ban đầu: " . $originalString . "<br>";
echo "Chuỗi đảo ngược: " . $reversedString;
echo "<br>";
?>
//Bai 16:
<?php
$array = [1, 2, 3, 4, 5];
$count = count($array);
echo "Số lượng phần tử trong mảng là: " . $count;
echo "<br>";
?>
//Bai 17:
<?php
function isPalindrome($str)
{
    // Chuyển đổi chuỗi thành chữ thường và loại bỏ các ký tự không phải chữ cái và số
    $str = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));

    // Lấy độ dài của chuỗi
    $length = strlen($str);
    
    // Kiểm tra các ký tự đối xứng
    for ($i = 0; $i < $length / 2; $i++) {
        if ($str[$i] !== $str[$length - $i - 1]) {
            return false;
        }
    }
    
    return true;
}

// Kiểm tra một chuỗi
$input = "A man, a plan, a canal, Panama";
if (isPalindrome($input)) {
    echo "Chuỗi là một chuỗi Palindrome.";
} else {
    echo "Chuỗi không phải là chuỗi Palindrome.";
}
echo "<br>";
?>
//Bai 18:
<?php
function countOccurrences($arr, $element) {
    $count = 0;
    foreach ($arr as $value) {
        if ($value == $element) {
            $count++;
        }
    }
    return $count;
}

// Mảng mẫu
$array = [1, 2, 3, 4, 2, 1, 2, 4, 5];

// Phần tử cần kiểm tra
$element = 2;

// Đếm số lần xuất hiện của phần tử trong mảng
$occurrences = countOccurrences($array, $element);

echo "Số lần xuất hiện của phần tử $element trong mảng là: $occurrences";
echo "<br>";
?>
//Bai 19:
<?php
// Mảng ban đầu
$array = [5, 2, 8, 1, 9];

// Sắp xếp mảng theo thứ tự giảm dần
arsort($array);

// In mảng sau khi sắp xếp
foreach ($array as $value) {
    echo $value . " ";
}
echo "<br>";
?>
//Bai 20:
<?php
// Hàm để thêm phần tử vào đầu mảng
function themVaoDau($mang, $phantu) {
    array_unshift($mang, $phantu);
    return $mang;
}

// Hàm để thêm phần tử vào cuối mảng
function themVaoCuoi($mang, $phantu) {
    $mang[] = $phantu;
    return $mang;
}

// Mảng ban đầu
$mang = [1, 2, 3, 4, 5];

// Thêm phần tử 0 vào đầu mảng
$mangSauKhiThemVaoDau = themVaoDau($mang, 0);
echo "Mảng sau khi thêm vào đầu: ";
print_r($mangSauKhiThemVaoDau);

// Thêm phần tử 6 vào cuối mảng
$mangSauKhiThemVaoCuoi = themVaoCuoi($mang, 6);
echo "Mảng sau khi thêm vào cuối: ";
print_r($mangSauKhiThemVaoCuoi);
echo "<br>";
?>
//Bai 21:
<?php
function findSecondLargest($arr) {
    $n = count($arr);
    if ($n < 2) {
        echo "Mảng không đủ phần tử.";
        return;
    }

    $max = $arr[0];
    $secondMax = $arr[0];

    for ($i = 1; $i < $n; $i++) {
        if ($arr[$i] > $max) {
            $secondMax = $max;
            $max = $arr[$i];
        } elseif ($arr[$i] > $secondMax && $arr[$i] != $max) {
            $secondMax = $arr[$i];
        }
    }

    if ($secondMax == $max) {
        echo "Không tìm thấy số lớn thứ hai.";
    } else {
        echo "Số lớn thứ hai trong mảng là: " . $secondMax;
    }
}

// Ví dụ sử dụng
$arr = [1, 5, 2, 9, 10, 6];
findSecondLargest($arr);
echo "<br>";
?>
//Bai 22:
<?php
function timUSCLN($a, $b)
{
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function timBSCNN($a, $b)
{
    $uscln = timUSCLN($a, $b);
    $bscnn = ($a * $b) / $uscln;
    return $bscnn;
}

// Số nguyên dương đầu vào
$a = 36;
$b = 48;

$uscln = timUSCLN($a, $b);
$bscnn = timBSCNN($a, $b);

echo "Ước số chung lớn nhất của $a và $b là: $uscln";
echo "<br>";
echo "Bội số chung nhỏ nhất của $a và $b là: $bscnn";
echo "<br>";
?>
//Bai 23:
<?php
function isPerfectNumber($number)
{
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }

    return $sum == $number;
}

$number = 28; // Số bạn muốn kiểm tra

if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không phải là số hoàn hảo.";
    echo "<br>";
}
?>
//Bai 24:
<?php
function timSoLeLonNhat($mang) {
    $solonnhat = null;

    foreach ($mang as $so) {
        if ($so % 2 != 0 && ($solonnhat === null || $so > $solonnhat)) {
            $solonnhat = $so;
        }
    }

    return $solonnhat;
}

// Mảng ví dụ
$mang = [2, 4, 7, 10, 13, 6, 9];

$solonnhat = timSoLeLonNhat($mang);

if ($solonnhat !== null) {
    echo "Số lẻ lớn nhất trong mảng là: " . $solonnhat;
} else {
    echo "Không có số lẻ trong mảng.";
}
echo "<br>";
?>
//Bai 26:
<?php
function timSoDuongLonNhat($mang) {
    $max = null; // Khởi tạo giá trị ban đầu cho biến max là null

    foreach ($mang as $so) {
        if ($so > 0 && ($max === null || $so > $max)) {
            $max = $so;
        }
    }

    return $max;
}

// Ví dụ sử dụng chương trình
$mang = [-2, 5, 10, -8, 3, 0, 7];
$soDuongLonNhat = timSoDuongLonNhat($mang);

if ($soDuongLonNhat !== null) {
    echo "Số dương lớn nhất trong mảng là: " . $soDuongLonNhat;
} else {
    echo "Không có số dương trong mảng.";
}
echo "<br>";
?>
//Bai 27:
<?php
function timSoAmLonNhat($mang) {
    $soAmLonNhat = null;
    
    foreach ($mang as $so) {
        if ($so < 0 && ($soAmLonNhat === null || $so > $soAmLonNhat)) {
            $soAmLonNhat = $so;
        }
    }
    
    return $soAmLonNhat;
}

// Ví dụ sử dụng
$mang = [2, -5, 9, -12, 6, -3, 0];
$soAmLonNhat = timSoAmLonNhat($mang);

if ($soAmLonNhat !== null) {
    echo "Số âm lớn nhất là: " . $soAmLonNhat;
} else {
    echo "Không có số âm trong mảng.";
}
echo "<br>";
?>
//Bai 28:
<?php
function tinhTongSoLe($n) {
    $tong = 0;
    
    // Duyệt qua tất cả các số từ 1 đến n
    for ($i = 1; $i <= $n; $i++) {
        // Kiểm tra nếu số hiện tại là số lẻ
        if ($i % 2 != 0) {
            $tong += $i; // Cộng số lẻ vào tổng
        }
    }
    
    return $tong;
}

// Sử dụng hàm để tính tổng các số lẻ từ 1 đến 10
$n = 10;
$tongSoLe = tinhTongSoLe($n);

echo "Tổng các số lẻ từ 1 đến $n là: $tongSoLe";
echo "<br>";
?>
//Bai 29:
<?php
function isPerfectSquare($number) {
    $sqrt = sqrt($number);
    return ($sqrt * $sqrt == $number);
}

function findPerfectSquares($start, $end) {
    $perfectSquares = array();
    
    for ($i = $start; $i <= $end; $i++) {
        if (isPerfectSquare($i)) {
            $perfectSquares[] = $i;
        }
    }
    
    return $perfectSquares;
}

$start = 1;  // Điểm bắt đầu của khoảng
$end = 100;  // Điểm kết thúc của khoảng

$perfectSquares = findPerfectSquares($start, $end);

echo "Các số chính phương trong khoảng từ $start đến $end là: ";
echo implode(', ', $perfectSquares);
echo "<br>";
?>
//Bai 30:
<?php

function isSubstring($string, $substring) {
    $stringLength = strlen($string);
    $substringLength = strlen($substring);

    // Nếu độ dài chuỗi con lớn hơn chuỗi gốc, không thể là chuỗi con
    if ($substringLength > $stringLength) {
        return false;
    }

    // Duyệt qua từng ký tự của chuỗi gốc để tìm chuỗi con
    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $j = 0;

        // Kiểm tra từng ký tự của chuỗi con
        while ($j < $substringLength && $string[$i + $j] === $substring[$j]) {
            $j++;
        }

        // Nếu tất cả các ký tự của chuỗi con khớp với chuỗi gốc, trả về true
        if ($j === $substringLength) {
            return true;
        }
    }

    // Nếu không tìm thấy chuỗi con, trả về false
    return false;
}

// Sử dụng hàm isSubstring để kiểm tra
$string = "Hello, world!";
$substring1 = "world";
$substring2 = "foo";

if (isSubstring($string, $substring1)) {
    echo "Chuỗi '$substring1' là chuỗi con của '$string'.";
} else {
    echo "Chuỗi '$substring1' không là chuỗi con của '$string'.";
}

echo "<br>";

if (isSubstring($string, $substring2)) {
    echo "Chuỗi '$substring2' là chuỗi con của '$string'.";
} else {
    echo "Chuỗi '$substring2' không là chuỗi con của '$string'.";
}

?>