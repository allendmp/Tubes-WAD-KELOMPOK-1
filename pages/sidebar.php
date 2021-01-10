<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-text mx-3">BANSOS</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Bansos</span></a>
</li>

<?php if($tampil['role']=="rt"){ ?>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item -->
<li class="nav-item active">
    <a class="nav-link" href="pengajuan.php">
        <i class="fas fa-fw fa-mail-bulk"></i>
        <span>Surat Pengajuan</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item -->
<li class="nav-item active">
    <a class="nav-link" href="datarequest.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Request</span></a>
</li>
<?php }else{ ?>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item -->
<li class="nav-item active">
    <a class="nav-link" href="request.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Request Swab</span></a>
</li>

<?php } ?>
</ul>