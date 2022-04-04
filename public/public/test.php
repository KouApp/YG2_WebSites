<form name="studentFile" method="post" action="test.php" enctype="multipart/form-data">


    <div class="position-relative form-group">
        <label for="filePdf">PDF</label>
        <input required name="filePdf" type="file" class="form-control-file">
    </div>


    <input class="mt-1 btn btn-primary" type="submit" name="sendFile" value="Gönder">
</form>

<?php
if(isset($_POST['sendFile'])){
    if (isset($_FILES['filePdf'])) {
        $hata = $_FILES['filePdf']['error'];
        if ($hata != 0) {
            echo '<h6 class="card-subtitle ml-2">Error Local</h6>';
        } else {
            $dosya = $_FILES['filePdf']['tmp_name'];
            copy($dosya, 'dosyalar/' . $_FILES['filePdf']['name']);
            $path = 'dosyalar/'. $_FILES['filePdf']['name'];
            $data = file_get_contents($path);
            $filePdfbase64 = base64_encode($data);
            echo $filePdfbase64;
        }
    }
    else {
        echo '<h6 class="card-subtitle ml-2"> filePdf Error</h6>';
    }
}
