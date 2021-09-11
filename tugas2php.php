<!DOCTYPE html>
<html lang="en">

<head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
         <style>
                  table,
                  th,
                  tr,
                  td {


                           border: 1px solid black;


                  }

                  .a {
                           margin-left: 1em;
                  }

                  th {
                           text-align: left;
                  }
         </style>
</head>

<body>
         <h1>Daftar Menu</h1>
         <table>
                  <tr>
                           <td>
                                    <?php echo "No" ?>
                           </td>
                           <td>
                                    <?php echo "Nama Menu" ?>

                           </td>
                           <td>
                                    <?php echo "harga" ?>

                           </td>

                  </tr>



                  <?php $x = "Rp. 10.0000" ?>
                  <?php $y = "Rp. 20.0000" ?>
                  <?php $a = "Rp. 40.0000" ?>
                  <?php $b = "Rp. 50.0000" ?>
                  <?php $c = "Rp. 110.0000" ?>


                  <tr>
                           <td>
                                    <?php echo "1"  ?>

                           </td>
                           <td class="a">

                                    <?php echo "ayam goreng " ?>

                           </td>
                           <td>
                                    <?php echo "$x" ?>
                           </td>

                  </tr>
                  <tr>
                           <td>
                                    <?php echo "2"  ?>

                           </td>
                           <td class="a">


                                    <?php echo "ayam bakar " ?>




                           <td>
                                    <?php echo "$y" ?>
                           </td>

                  </tr>
                  <tr>
                           <td>
                                    <?php echo "3"  ?>

                           </td>
                           <td class="a">


                                    <?php echo "ayam bumbu rica" ?>




                           <td>
                                    <?php echo " $a" ?>
                           </td>

                  </tr>
                  <tr>
                           <td>
                                    <?php echo "4"  ?>

                           </td>
                           <td class="a">


                                    <?php echo "ayam bumbu ijo " ?>




                           <td>
                                    <?php echo " $b" ?>
                           </td>

                  </tr>
                  <tr>
                           <td>
                                    <?php echo "5"  ?>

                           </td>

                           <td class="a">


                                    <?php echo "ikan enak" ?>




                           <td>
                                    <?php echo " $c" ?>
                           </td>

                  </tr>



         </table>
</body>

</html>