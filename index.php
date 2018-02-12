<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>MY APPLICATION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/bootstrap.css">
    
    <link rel="stylesheet" href="vendor/custom.css">
    
    <style>
      body {
          padding-top: 80px;
          background-color: #e7e0f3;
      }
      .container {
          background-color: white;
      }

      .bs-docs-section {
          margin-top: 0em;
      }

      .bs-docs-section .page-header h1 {
          padding: 0rem 0;
          font-size: 3rem;
      }

      #footer {
          margin: 2em 0;
      }

    </style>
  </head>
  <body>
    
    <?php include "top-menu.php"; ?>


    <div class="container">
    
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active">Data</li>
      </ol>

      <!-- Forms
      ================================================== -->
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms">Forms</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="bs-component">
              <form>
                <fieldset>
                  <legend>Legend</legend>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input readonly="readonly" class="form-control-plaintext" id="staticEmail" value="email@example.com" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" type="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelect1">Example select</label>
                    <select class="form-control" id="exampleSelect1">
                      <option selected="selected">1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleSelect2">Example multiple select</label>
                    <select multiple="multiple" class="form-control" id="exampleSelect2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea">Example textarea</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file">
                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                  </div>
                  <fieldset class="form-group">
                    <legend>Radio buttons</legend>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="checked" type="radio">
                        Option one is this and that—be sure to include why it's great
                      </label>
                    </div>
                    <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
                        Option two can be something else and selecting it will deselect option one
                      </label>
                    </div>
                    <div class="form-check disabled">
                    <label class="form-check-label">
                        <input class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="disabled" type="radio">
                        Option three is disabled
                      </label>
                    </div>
                  </fieldset>
                  <fieldset class="form-group">
                    <legend>Checkboxes</legend>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" value="" checked="checked" type="checkbox">
                        Option one is this and that—be sure to include why it's great
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <label class="form-check-label">
                        <input class="form-check-input" value="" disabled="disabled" type="checkbox">
                        Option two is disabled
                      </label>
                    </div>
                  </fieldset>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
              </form>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">

            <form class="bs-component">
              <div class="form-group">
                <fieldset disabled="">
                  <label class="control-label" for="disabledInput">Disabled input</label>
                  <input class="form-control" id="disabledInput" placeholder="Disabled input here..." disabled="disabled" type="text">
                </fieldset>
              </div>

              <div class="form-group">
                <fieldset>
                  <label class="control-label" for="readOnlyInput">Readonly input</label>
                  <input class="form-control" id="readOnlyInput" placeholder="Readonly input here…" readonly="readonly" type="text">
                </fieldset>
              </div>

              <div class="form-group has-success">
                <label class="form-control-label" for="inputSuccess1">Valid input</label>
                <input value="correct value" class="form-control is-valid" id="inputValid" type="text">
                <div class="valid-feedback">Success! You've done it.</div>
              </div>

              <div class="form-group has-danger">
                <label class="form-control-label" for="inputDanger1">Invalid input</label>
                <input value="wrong value" class="form-control is-invalid" id="inputInvalid" type="text">
                <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
              </div>

              <div class="form-group">
                <label class="col-form-label col-form-label-lg" for="inputLarge">Large input</label>
                <input class="form-control form-control-lg" placeholder=".form-control-lg" id="inputLarge" type="text">
              </div>

              <div class="form-group">
                <label class="col-form-label" for="inputDefault">Default input</label>
                <input class="form-control" placeholder="Default input" id="inputDefault" type="text">
              </div>

              <div class="form-group">
                <label class="col-form-label col-form-label-sm" for="inputSmall">Small input</label>
                <input class="form-control form-control-sm" placeholder=".form-control-sm" id="inputSmall" type="text">
              </div>

              <div class="form-group">
                <label class="control-label">Input addons</label>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">$</span>
                    </div>
                    <input class="form-control" aria-label="Amount (to the nearest dollar)" type="text">
                    <div class="input-group-append">
                      <span class="input-group-text">.00</span>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <div class="bs-component">
              <fieldset>
                <legend>Custom forms</legend>
                <div class="form-group">
                  <div class="custom-control custom-radio">
                    <input id="customRadio1" name="customRadio" class="custom-control-input" checked="checked" type="radio">
                    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input id="customRadio2" name="customRadio" class="custom-control-input" type="radio">
                    <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input id="customRadio3" name="customRadio" class="custom-control-input" disabled="disabled" type="radio">
                    <label class="custom-control-label" for="customRadio3">Disabled custom radio</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="customCheck1" checked="checked" type="checkbox">
                    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="customCheck2" disabled="disabled" type="checkbox">
                    <label class="custom-control-label" for="customCheck2">Disabled custom checkbox</label>
                  </div>
                </div>
                <div class="form-group">
                  <select class="custom-select">
                    <option selected="selected">Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="custom-file">
                    <input id="file2" class="custom-file-input" type="file">
                    <span class="custom-file-control"></span>
                  </label>
                </div>
              </fieldset>
            </div>

          </div>
        </div>
      </div>

      


      <?php include "footer.php"; ?>


    </div>

    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vendor/jquery.js"></script>
    <script src="vendor/popper.js"></script>
    <script src="vendor/bootstrap.js"></script>
    <script src="vendor/custom.js"></script>
  </body>
</html>