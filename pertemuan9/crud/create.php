<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $id= $_POST['id'];
    $judul= $_POST['judul'];
    $pengarang= $_POST['pengarang'];
    $tahun_terbit= $_POST['tahunterbit'];
    $penerbit= $_POST['penerbit'];

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO buku VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $judul, $pengarang, $tahun_terbit, $penerbit]);
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Create Book</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="judul">Judul</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="judul" id="judul">
        <label for="pengarang">Pengarang</label>
        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="text" name="penerbit" id="penerbit">
        <!-- <input type="text" name="notelp" id="notelp">
        <label for="pekerjaan">Pekerjaan</label>
        <input type="text" name="pekerjaan" id="pekerjaan"> -->
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>