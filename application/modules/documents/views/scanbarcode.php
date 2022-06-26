<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-barcode"></i> Scan Barcode</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
        </ul>
    </div>

    <div class="row text-center">
        <div class="col-md-12">
            <div class="form-group">
                <label for="title" class="control-label">BARCODE</label>
                <input type="text" class="form-control text-center barcodeInput" name="barcodeInput">
                <small class="err"></small>
            </div>
            <hr>
        </div>

        <div class="col-md-12 scanResult"></div>

    </div>

</main>

<!-- =============================Update Notes Modal================================= -->
<div id="modal_updateNotes" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="icon-document"></i> Update Notes</h4>
                
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                    <form class="form_updateNotes" action="" method="post">
                    <div class="form-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="file_notes" class="control-label">Notes:</label>
                                    <textarea name="file_notes" class="form-control"></textarea>
                                    <small class="err"></small>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="col-sm-12 text-center">
                            <input type="hidden" name="file_id">
                            <button type="submit" class="btn btn-primary btn-sm btn-submits"><i class="fa fa-file"></i> Update Note</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
</div>