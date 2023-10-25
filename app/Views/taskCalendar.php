<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <title>KLF - Task Calendar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="<?= base_url('assets2/style.css'); ?>">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

</head>
<body>

<style>
  .subtask {
    text-indent: 13px;
  }

  .subofsub {
    text-indent: 40px;
  }
  .subtask-icon {
    width: 8px; /* Lebar ikon bulat */
    height: 8px; /* Tinggi ikon bulat */
    background-color: white; /* Warna latar belakang ikon */
    border-radius: 50%; /* Mengatur ikon menjadi bulat */
    display: inline-block;
    margin-right: 3px; /* Jarak antara ikon dan teks */
  }
  .subofsub-icon {
    width: 6px; /* Lebar ikon bulat */
    height: 6px; /* Tinggi ikon bulat */
    background-color: grey; /* Warna latar belakang ikon */
    border-radius: 50%; /* Mengatur ikon menjadi bulat */
    display: inline-block;
    margin-right: 3px; /* Jarak antara ikon dan teks */
  }


</style>


<!-- partial:index.partial.html -->
<div class="app-container">
  <div class="sidebar">
    <div class="sidebar-header">
      <div class="app-icon">
        <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z"/></svg>
        <p class="text-light">Karya Logam Furniture</p>
      </div>
      
    </div>
    <ul class="sidebar-list">
      <li class="sidebar-list-item">
        <a href="<?= base_url('dashboard'); ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dashboard">
    <rect x="3" y="3" width="6" height="6" />
    <rect x="15" y="3" width="6" height="6" />
    <rect x="3" y="15" width="6" height="6" />
    <rect x="15" y="15" width="6" height="6" />
</svg>

          <span>Dashboard</span>
        </a>
      </li>
      <li class="sidebar-list-item">
        <a href="<?= base_url('order/listOrder'); ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list-order">
    <line x1="5" y1="6" x2="19" y2="6" />
    <line x1="5" y1="12" x2="19" y2="12" />
    <line x1="5" y1="18" x2="19" y2="18" />
</svg>


          <span>List Order</span>
        </a>
      </li>

      <li class="sidebar-list-item active">
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-task-calendar">
    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
    <line x1="16" y1="2" x2="16" y2="6" />
    <line x1="8" y1="2" x2="8" y2="6" />
    <line x1="3" y1="10" x2="21" y2="10" />
    <line x1="3" y1="14" x2="21" y2="14" />
</svg>

          <span>Task Calendar</span>
        </a>
      </li>
      <li class="sidebar-list-item">
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-supplier">
    <rect x="3" y="8" width="18" height="12" rx="2" ry="2" />
    <rect x="8" y="6" width="8" height="4" rx="1" ry="1" />
    <path d="M12 16v3m-2-3v3m4-3v3" />
</svg>

          <span>Supplier</span>
        </a>
      </li>
      <li class="sidebar-list-item">
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-product-catalog">
    <rect x="2" y="3" width="20" height="18" rx="2" ry="2" />
    <line x1="9" y1="7" x2="15" y2="7" />
    <line x1="9" y1="11" x2="15" y2="11" />
    <line x1="9" y1="15" x2="13" y2="15" />
</svg>




          <span>Katalog Produk</span>
        </a>
      </li>
    </ul>
    <div class="account-info">
      <div class="account-info-picture">
        <img src="https://images.unsplash.com/photo-1527736947477-2790e28f3443?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE2fHx3b21hbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="Account">
      </div>
      <div class="account-info-name">Rakev</div>
      <button class="account-info-more">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
      </button>
    </div>
  </div>
  <div class="app-content">
    <div class="app-content-header mt-4">
      <h1 class="app-content-headerText">Task Calendar</h1>
      
    </div>

    <div class="app-content-actions">
      <input class="search-bar" placeholder="Search..." id="searchInput" type="text">
      <a class="btn btn-primary" href="<?= base_url('order/inputOrder'); ?>">Input Order</a>
    </div>

    <div class="products-area-wrapper tableView">
      <div class="products-header">
      <div class="product-cell status-cell">To Do (<?= $jumlahTask; ?> Tasks)</div>
        <div class="product-cell sales">Deadline</div>
        <div class="product-cell sales">Actions</div>
      </div>






      <div id="productList">
      <ul class="list-group">
  <?php foreach ($OrderData as $row): ?>
    <?php $task = str_replace('/', '_', $row['kode_order']); ?>
<li class="">
<!-- <a href="#" class="" data-toggle="modal" data-target="#exampleModal"> -->
    <div class="products-row task">
      <div class="product-cell category">
        <span><button class="icon-button bg-dark" data-toggle="collapse" href="#<?php echo $task; ?>" onclick="toggleIcon('icon<?php echo $task; ?>')">
        <i id="icon<?php echo $task; ?>" class="fas fa-chevron-right" style="color:grey"></i>
      </button> <?= $row['kode_order']; ?> - <?= $row['nama']; ?></span>
      </div>
      <div class="product-cell status-cell">
        <span><?= date('d-m-Y', strtotime($row['deadline'])); ?></span>
      </div>
      <div class="product-cell status-cell">
        <span>
          <button type="button" class="btn btn-success rounded-circle" data-toggle="modal" data-target="#add<?php echo $task; ?>"><i class="fas fa-plus"></i></button>
          <button type="button" class="btn btn-primary rounded-circle" onclick="alert('Judul task tidak dapat diedit!')"><i class="fas fa-pencil-alt"></i></button>
          <button type="button" class="btn btn-danger rounded-circle" onclick="alert('Judul task tidak dapat dihapus!')"><i class="fas fa-trash"></i></button>
      </span>
      </div>
    </div>
<!-- </a> -->
    </li>
    <div id="<?php echo $task; ?>" class="collapse">

    <?php foreach ($TaskCalendarData as $taskCalendar): ?>
      <?php if ($taskCalendar['parent'] == $row['kode_order']): ?>
          <ul class="list-group list-group-flush">
        <li class="">

        <div class="products-row task">
      <div class="product-cell category subtask">
        <span><button class="icon-button bg-dark" data-toggle="collapse" href="#sub<?php echo $taskCalendar['id']; ?>" onclick="toggleIcon('iconsub<?php echo $taskCalendar['id']; ?>')">
        <i id="iconsub<?php echo $taskCalendar['id']; ?>" class="fas fa-chevron-right" style="color:grey"></i>
      </button> <?= $taskCalendar['task']; ?></span>
      </div>
      <div class="product-cell status-cell">
        <span><?= $taskCalendar['deadline']; ?></span>
      </div>
      <div class="product-cell status-cell">
        <span>
        <button type="button" class="btn btn-success rounded-circle" data-toggle="modal" data-target="#add<?php echo $taskCalendar['id']; ?>"><i class="fas fa-plus"></i></button>
          <button type="button" class="btn btn-primary rounded-circle" data-toggle="modal" data-target="#edit<?php echo $taskCalendar['id']; ?>"><i class="fas fa-pencil-alt"></i></button>
          <a class="btn btn-danger rounded-circle" href="<?= base_url('taskCalendar/deleteSubtask?id=' . $taskCalendar['id']); ?>" onclick="return confirm('Anda yakin ingin menghapus subtask ini?');"><i class="fas fa-trash"></i></a>    
      </span>
      </div>
    </div>

        </li>
        <div id="sub<?php echo $taskCalendar['id']; ?>" class="collapse">

        <?php foreach ($TaskCalendarData as $taskCalendar2): ?>
          <?php if ($taskCalendar2['parent'] == $taskCalendar['id']): ?>
          <ul class="list-group list-group-flush">
            <li class="">

            <div class="products-row task">
      <div class="product-cell category subofsub">
        <span><i class="subofsub-icon"></i> <?= $taskCalendar2['task']; ?></span>
      </div>
      <div class="product-cell status-cell">
        <span><?= $taskCalendar2['deadline']; ?></span>
      </div>
      <div class="product-cell status-cell">
        <span>
        <button type="button" class="btn btn-success rounded-circle" onclick="alert('tidak dapat menambah sub task pada sub of sub')"><i class="fas fa-plus"></i></button>
        <button type="button" class="btn btn-primary rounded-circle" data-toggle="modal" data-target="#edit<?php echo $task; ?>"><i class="fas fa-pencil-alt"></i></button>
        <a class="btn btn-danger rounded-circle" href="<?= base_url('taskCalendar/deleteSubtask?id=' . $taskCalendar2['id']); ?>" onclick="return confirm('Anda yakin ingin menghapus subtask ini?');"><i class="fas fa-trash"></i></a>  
        </span>
      </div>
    </div>

            </li>
          </ul>
          <?php endif; ?>
          <?php endforeach; ?>


        </div>

      </ul>
        <?php endif; ?>
    <?php endforeach; ?>

    </div>

  <?php endforeach; ?> 
</ul>
</div>







<?php foreach ($OrderData as $row): ?>
  <?php $modalId = str_replace('/', '_', $row['kode_order']); ?>
  <?php
        $parent = base64_encode($row['kode_order']);
      ?>
  <div class="modal fade" id="add<?= $modalId; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="<?= base_url('taskCalendar/addSubtask?parent=' . $parent); ?>" method="post">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $row['kode_order']; ?> (Tambah Subtask)</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <div class="mb-3">
            <label for="task" class="form-label">Task</label>
            <input type="text" class="form-control" id="task" name="task">
          </div>
          <div class="mb-3">
            <label for="deadline" class="form-label">Deadline</label>
            <input type="date" class="form-control" id="deadline" name="deadline">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>

      
<?php foreach ($TaskCalendarData as $row): ?>
  <?php $modalId = $row['id']; ?>
  <?php
        $parent = base64_encode($row['id']);
      ?>
  <div class="modal fade" id="add<?= $modalId; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="<?= base_url('taskCalendar/addSubtask?parent=' . $parent); ?>" method="post">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $row['task']; ?> (Tambah Subtask)</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <div class="mb-3">
            <label for="task" class="form-label">Task</label>
            <input type="text" class="form-control" id="task" name="task">
          </div>
          <div class="mb-3">
            <label for="deadline" class="form-label">Deadline</label>
            <input type="date" class="form-control" id="deadline" name="deadline">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>




      

    </div>





  </div>
</div>
<!-- partial -->

<script>
  function toggleIcon(iconId) {
    const icon = document.getElementById(iconId);
    if (icon.classList.contains('fa-chevron-right')) {
      icon.classList.remove('fa-chevron-right');
      icon.classList.add('fa-chevron-down');
    } else {
      icon.classList.remove('fa-chevron-down');
      icon.classList.add('fa-chevron-right');
    }
  }
</script>


<script>
$(document).ready(function () {
  // Tambahkan event listener untuk setiap task
  $(".task").click(function () {
    // Dapatkan ID task yang diklik
    var taskId = $(this).data("task-id");
    
    // Cari subtask yang sesuai berdasarkan ID
    var $subtask = $(".subtask[data-task-id='" + taskId + "']");
    
    // Toggle tampilan subtask
    $subtask.toggle();
  });
});
</script>


  <script  src="<?= base_url('assets2/script.js'); ?>"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
