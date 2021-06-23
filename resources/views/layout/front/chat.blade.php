<!-- Modal Action Chat -->
<div class="modal fade" id="chat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chat Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama"">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nomor WhatsApp</label>
              <input placeholder="Contoh: 081300123123" type="text" class="form-control" id="nohp" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="floatingTextarea" class="form-label">Isi Pesan</label>
                <textarea class="form-control" rows="4" placeholder="Ketikkan pesan kamu disini" id="floatingTextarea"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Kirim WhatsApp</button>
          </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
    </div>
    </div>
</div>

  <!-- fixed button -->
    <section class="fixed-bottom p-4">
       <!-- Button trigger modal -->
       <button type="button" class="btn btn-success  p-3 rounded-circle float-right" data-bs-toggle="modal" data-bs-target="#chat">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
        </svg>
    </button>
      <button class="btn btn-md btn-light float-right" style="border: 1px solid black;">
        Click untuk chat</button>
    </section>
