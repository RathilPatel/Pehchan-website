
  <div class="col l9">

                  <!-- <h1>ADDING PRODUCT</h1> -->
                  <div class="">
                    <form class="" action="<?php adding_products(); ?>" method="POST" enctype="multipart/form-data">
                      <div class="row">
                         <div class="input-field col s6">
                           <input id="product_code" type="text" name="pcode" class="validate" required>
                           <label for="product_code">Product Code</label>
                         </div>
                         <div class="input-field col s6">
                           <input id="product_name" type="text" name="pname" class="validate" required>
                           <label for="product_name">Product Name</label>
                         </div>
                       </div>
                       <div class="row">
                          <div class="input-field col s6">
                            <input id="email" type="text" name="gsm" class="validate" required>
                            <label for="email">GSM</label>
                          </div>
                           <div class="input-field col s6 ">
                             <input id="email" type="text" name="mou" class="validate" required>
                             <label for="email">MOU</label>
                           </div>
                         </div>
                         <div class="row">
                            <div class="input-field col s6">
                              <input id="email" type="text" name="oprice" class="validate" required>
                              <label for="email">Price</label>
                            </div>
                             <div class="input-field col s6">
                               <input id="email" type="text" name="sprice" class="validate" required>
                               <label for="email">Sample price</label>
                             </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea validate" name="pdesc" required></textarea>
                            <label for="textarea1">Description</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col s12">
                            <div class="file-field input-field">
                              <div class="btn">
                                <span>Choose File</span>
                                <input type="file" id="image" name="image">
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">

                              </div>
                          </div>
                         </div>
                       </div>
        <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
                      <input type="submit" name="submitproduct" value="submit" id="submit" class="waves-effect waves-light btn">


                    </form>

                  </div>
                </div>
              </div>
