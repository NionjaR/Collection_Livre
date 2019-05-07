<h3><i class="fa fa-angle-right"></i> The List Of Book</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> List Book</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>Name Book</th>
                      <th>Date Enter</th>
                      <th>Description</th>
                      <th>Action </th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach($data AS $data){  ?>
                    <tr>
                      <td><?php echo $data['NAME_BOOK']?></td>
                      <td><?php echo $data['DATE_ENTER']?></td>
                      <td><?php echo $data['DESCRIPTIONS']?></td>
                      <td>
                          <a href="page_update-<?php echo $data['ID'];?>.html" >u</a>
                          <a href="delete_livre-<?php echo $data['ID'];?>.html" >d</a>
                      </td>
                    </tr>
                      <?php }?>
                  </tbody>
                </table>  
                </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
