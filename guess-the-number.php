<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Žaidimas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- Easy: sukurti naują puslapį "Atspėk skaičių". Jame turėtu būti jau klasika tapęs programavimo žaidimas atspėk skaičių.

Sukuriame formą su dviem laukais: Sudėtingumas (lengvas - 3 skaičiai, vidutinis - 5 skaičiai, sunkus - 7 skaičiai) 
ir Skaičius kurį spėjame. Paspaudus "Žaisti" išrenkamas atsitiktinis skaičius ir nusprendžiama ar mes laimėjome. -->
<div class="container">
    <div class="text text-center mt-3">
        <h1>Atspėk skaičių</h1>
    </div>
</div>
<div class="container">
    <div class="content">
    <?php 
    if(isset($_GET["zaisti"]) && !empty($_GET['difficulty'])) {
        $skaicius = $_GET["skaicius"];
        $selected = $_GET['difficulty'];

        if($selected==1){
            if(is_numeric($skaicius) && $skaicius >=1 && $skaicius <=3) {
                $random=rand(1,3);
                if($random==$skaicius) {
                    echo '<div class="alert alert-success role="alert">Sveikiname! Jūs spėjote '.$skaicius.' ir atspėjote, kad laimingas skaičius bus '.$random.'</div>';
                } 
                else {
                    echo '<div class="alert alert-danger" role="alert">Deja, teks bandyti dar kartą... Jūs spėjote '.$skaicius.', bet laimingas skaičius buvo '.$random.'</div>';
                }
            } else {
                echo '<div class="alert alert-warning" role="alert">Įrašykite skaičių nuo 1 iki 3 </div>';
            }
        } else if($selected==2) {
            if(is_numeric($skaicius) && $skaicius >=1 && $skaicius <=5) {
                $random=rand(1,5);
                if($random==$skaicius) {
                    echo '<div class="alert alert-success role="alert">Sveikiname! Jūs spėjote '.$skaicius.' ir atspėjote, kad laimingas skaičius bus '.$random.'</div>';
                } 
                else {
                    echo '<div class="alert alert-danger" role="alert">Deja, teks bandyti dar kartą... Jūs spėjote '.$skaicius.', bet laimingas skaičius buvo '.$random.'</div>';
                }
            }else {
                echo '<div class="alert alert-warning" role="alert">Įrašykite skaičių nuo 1 iki 5 </div>';
            }
        } else if($selected==3) {
            if(is_numeric($skaicius) && $skaicius >=1 && $skaicius <=7) {
                $random=rand(1,7);
                if($random==$skaicius) {
                    echo '<div class="alert alert-success role="alert">Sveikiname! Jūs spėjote '.$skaicius.' ir atspėjote, kad laimingas skaičius bus '.$random.'</div>';
                } 
                else {
                    echo '<div class="alert alert-danger" role="alert">Deja, teks bandyti dar kartą... Jūs spėjote '.$skaicius.', bet laimingas skaičius buvo '.$random.'</div>';
                }
            } else {
                echo '<div class="alert alert-warning" role="alert">Įrašykite skaičių nuo 1 iki 7 </div>';
            }
        }
    }

?>
    <p class="mb-0">Sudėtingumas</p>
    <form method="GET" action="guess-the-number.php">
        <select name="difficulty" class="form-select form-select-lg mb-3" aria-label="Default select example">
            <option disabled selected>Pasirinkti</option>
            <option value="1" <?php echo (isset($_GET['difficulty']) && $_GET['difficulty'] == '1')?'selected="selected"':''; ?>>Lengvas (3 skaičiai)</option>
            <option value="2" <?php echo (isset($_GET['difficulty']) && $_GET['difficulty'] == '2')?'selected="selected"':''; ?>>Vidutinis (5 skaičiai)</option>
            <option value="3" <?php echo (isset($_GET['difficulty']) && $_GET['difficulty'] == '3')?'selected="selected"':''; ?>>Sunkus (7 skaičiai)</option>
        </select>
        <p class="mb-0">Skaičius, kurį spėjame</p>
            <input required='required' name="skaicius" class="w-100 form-control" value="<?php echo isset($_GET["skaicius"]) ? $_GET["skaicius"] : ""  ; ?>" />
            <button name="zaisti" class="btn btn-primary" type="submit">Žaisti</button>
        </form>
    </div>
</div>

    
</body>
</html>