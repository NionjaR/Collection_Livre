<h3><i class="fa fa-angle-right"></i> SAVE BOOK </h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              <form action="updateBook.html" method="post" class="form-horizontal style-form">
            <input type="hidden" value="<?php echo $_GET['idlivre'];?>" name="idlivre">
            <div class="form-group">
                <label class="control-label col-md-3">Name Book</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <input type="text" placeholder="<?php echo $data[0]['NAME_BOOK'];?>" name="name_book" size="24 " class="form-control">                      
                    </div>
                  </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3">Description</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <input type="text"  name="description" placeholder="<?php echo $data[0]['DESCRIPTIONS'];?>"  size="24 " class="form-control">                      
                    </div>
                  </div>
                </div>
              
                <div class="form-group last">
                  <div class="col-lg-offset-5 col-lg-10">
                    <button class="btn btn-theme" type="submit">Update</button>
                  </div>
                </div>

              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
