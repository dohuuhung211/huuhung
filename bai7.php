<?php
    // Thay the van ban torng 1 chuoi
    if(isset($_GET['form_click'])){
        $s_str = $s_pos = $s_strReplace = '';
        if(isset($_GET['str'])){
            $s_str = $_GET['str'];
        }
        if(isset($_GET['pos'])){
            $s_pos = $_GET['pos'];
        }
        if(isset($_GET['strReplace'])){
            $s_strReplace = $_GET['strReplace'];
        }
        $strRs = str_replace($s_pos, $s_strReplace, $s_str);
    }
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form method="get">
        <label>Nhap chuoi:</label>
        <input type="text" name="str"><br>
        <label>Nhap van ban muon thay the:</label>
        <input type="text" name="pos">
        <label>Nhap van ban thay the:</label>
        <input type="text" name="strReplace">
        <button type="submit" name="form_click">Action</button>
    </form>
    <h3><?php echo $strRs ?></h3>
</body>
</html>