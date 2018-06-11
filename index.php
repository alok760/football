<!Doctype html>
<html>
    <head>
        <title>football</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
          <form action="create.php" method="POST">
            <div class="row border" style="margin:50px;">


                <div class="col"> <input class="form-control" style="margin:10px;" type="text" value="Table-Name" name="tname"> </div>
                <div class="col"> <button class="btn btn-block" onclick="start()">START</button> </div>

            </div>
            </form>
            <form action="ind.php" method="POST">
            <div class="row wrap_row">
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <div class="row my_row border">
                                    <button class="btn btn-block col-sm-3 " name="one" value="adidas">Adidas</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="goal">goal</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="mcdonalds">Mcdonalds</button>
                                    <div class="mx-auto text-center ss"><b>A</b></div>
                        </div>

                        <div class="row my_row border">
                                    <button class="btn btn-block col-sm-3" name="one" value="mengniu">Mengniu</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="vivo">Vivo</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="offsides">Off-Sides</button>
                                    <div class="mx-auto text-center ss"><b>B</b></div>
                        </div>

                        <div class="row my_row border">
                                    <button class="btn btn-block col-sm-3" name="one" value="wandagroup">Wanda-Group</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="budweiser">Budweiser</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="penalty">penalty</button>
                                    <div class="mx-auto text-center ss"><b>C</b></div>
                        </div>

                        <div class="row my_row border">
                                    <button class="btn btn-block col-sm-3" name="one" value="qatarairways">Qatar Airways</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="mengniu1">Mengniu</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="gazprom">Gazprom</button>
                                    <div class="mx-auto text-center ss"><b>D</b></div>
                        </div>



                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <div class="row my_row border">
                                    <button class="btn btn-block col-sm-3" name="one" value="cocacola">Coca-cola</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="wandagroup1">Wanda-Group</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="substitution">Substitution</button>
                                    <div class="mx-auto text-center ss"><b>E</b></div>
                        </div>

                        <div class="row my_row border">
                                    <button class="btn btn-block col-sm-3" name="one" value="visa">Visa</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="misses">Misses</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="fifa">FIFA</button>
                                    <div class="mx-auto text-center ss"><b>F</b></div>
                        </div>

                        <div class="row my_row border">
                                    <button class="btn btn-block col-sm-3" name="one" value="interestingmoment">Interesting-M</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="closeupshots">Close-Up Shots</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="hyundaimotor">Hyundai-motor</button>
                                    <div class="mx-auto text-center ss"><b>G</b></div>
                        </div>

                        <div class="row my_row border">
                                    <button class="btn btn-block col-sm-3" name="one" value="cardred">Card-Red</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="cardyellow">Card-Yellow</buttom>
                                    <button class="btn btn-block col-sm-3" name="one" value="save">Save</button>
                                    <div class="mx-auto text-center ss"><b>H</b></div>
                        </div>



                    </div>
                </div>

            </div>
          </form>
          <form action="export.php" method="POST">
          <div class="row border" style="margin:50px;">
              <div class="col"> <button class="btn btn-block" onclick="start()">Download Spreadsheet</button> </div>
          </div>
          </form>

        </div>
    </body>

</html>
