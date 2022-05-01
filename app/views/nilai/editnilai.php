
<?php 
$this->view('templates/strtemplate',$data);
?>


<body class="g-sidenav-show  bg-gray-200">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php 
$this->view('templates/nav',$data);
?>

    <!-- End Navbar -->
    <div class="container-fluid py-4" style="padding-left: 0px;">
    <?php 
$this->view('templates/mainmenu',$data);
?>

    <div class="position-relative h-100 m-3 px-7 d-flex flex-column justify-content-center">
    <div class="col-12">
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h4 class="text-white text-capitalize ps-3">Biodata Siswa Paud Assibyan</h4>
        </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                <p><button type="button" class="btn btn-lg btn-lg w-auto  mb-0" style="background-color:#b0c4ee;">Data Induk</button></p>
                <hr>
                <form action="<?= base_url ?>/nilaisiswa/update" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?=   $data['nilai']['id'] ?>">
                    <div>
                        <p class="text-dark">Nama Siswa</p>
                        <input type="text"  name="nama" id="nama" value="<?=   $data['nilai']['nama'] ?>"  class="form-control"  disabled style="background-color: #B6BDFF; padding-left :10px" >
                    </div>

                  
                    <div class="mb-3">
                                <label
                                                     for="recipient-name"
                                                     class="col-form-label"
                                                     >Bermain:</label
                                                 >
                                                 
                                                 <input
                                                     type="text"
                                                     class="form-control"
                                                     name="bermain"
                                                     value="<?=   $data['nilai']['bermain'] ?>"
                                                     required
                                                     style="
                                                         background-color: #b6bdff;
                                                         padding-left: 10px;
                                                     "
                                                     id="recipient-name"
                                                  />
                                              </div>
                                              
                                              <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Ikrar Bersama:</label
                                                >
                                                
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="ikrar_bersama"
                                                    value="<?=   $data['nilai']['ikrar_bersama'] ?>"
                                                    required
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                    id="recipient-name"
                                                 />
                                             </div>
                                             
                                             <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Senam Irama:</label
                                                >
                                                
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="senam_irama"
                                                    value="<?=   $data['nilai']['senam_irama'] ?>"
                                                    required
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                    id="recipient-name"
                                                />
                                             </div>

                                              <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Bernyanyi:</label
                                                >
                                                
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="bernyanyi"
                                                    value="<?=   $data['nilai']['bernyanyi'] ?>"
                                                    required
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                    id="recipient-name"
                                                />
                                              </div>

                                              <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Berdoa:</label
                                                >
                                                
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="berdoa"
                                                    value="<?=   $data['nilai']['berdoa'] ?>"
                                                    required
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                    id="recipient-name"
                                                />
                                              </div>

                                              <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Pijakan Sebelum Bermain:</label
                                                >
                                                
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="pijakan_sebelum_bermain"
                                                    value="<?=   $data['nilai']['pijakan_sebelum_bermain'] ?>"
                                                    required
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                    id="recipient-name"
                                                />
                                              </div>

                                              <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Pijakan Setelah Bermain:</label
                                                >
                                                
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="pijakan_setelah_bermain"
                                                    value="<?=   $data['nilai']['pijakan_setelah_bermain'] ?>"
                                                    required
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                    id="recipient-name"
                                                />
                                              </div>

                                              <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Komentar Nilai Siswa:</label
                                                >
                                                <textarea
                                                    class="form-control"
                                                    name="komentar"
                                                    required
                                                    id="exampleFormControlTextarea1"
                                                    rows="3"
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                ><?=   $data['nilai']['komentar'] ?></textarea>
                                            </div>


                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" onclick="history.go(-1);" >Cancel</button>
                        <button type="submit" class="btn btn-primary">Edit</button>                  
                    </div>

                </form>

        
            </div>
        <br>

   
        <br>
        </div>
    </div>
    <br><br>

    </div>
    </div>
    </div>
    
    </div>
          

    
    <?php 
$this->view('templates/footer',$data);
?>



    </div>
  </main>

  <?php 
$this->view('templates/endtemplate',$data);
?>
