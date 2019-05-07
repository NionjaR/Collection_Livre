<h3><i class="fa fa-angle-right"></i> SAVE BOOK </h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              <form action="insert_livre.html" method="post" class="form-horizontal style-form">
                <div class="form-group">
                <label class="control-label col-md-3">Name Book</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <input type="text" name="name_book" size="24 " class="form-control">                      
                    </div>
                  </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3">Categorie</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                     <select class="form-control" name="categorie">                                          
                        <?php  
                            foreach($categories as $categories) {
                        ?>                                      
                        <option value="<?php  echo $categories['ID']?>"><?php  echo $categories['CATEGORIE']?></option>                                       
                        <?php } ?>
                      </select>                      
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-3">Date Enter</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <input type="date" name="date_enter"  value="01-01-2014" size="16" class="form-control">                    
                    </div>
                  </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3">Name Image</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <input type="text"  name="name_image"  size="24 " class="form-control">                      
                    </div>
                  </div>
                </div>
                <div class="form-group last">
                  <label class="control-label col-md-3">Image Upload</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" />
                        </span>
                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                      </div>
                    </div>                                       
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Description</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <textarea type="textarea" name="description"  size="16" class="form-control"></textarea>                    
                    </div>
                  </div>
                </div>
                <div class="form-group last">
                  <div class="col-lg-offset-5 col-lg-10">
                    <button class="btn btn-theme" type="submit">Submit</button>
                  </div>
                </div>

              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
