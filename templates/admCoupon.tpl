<section class="sekcija">
    <h6>.</h6>
    <form  class="reg_form" >
        <p id="poruka"></p>

        <p id="catToSer">
            <label > Kategorija: </label>
            {html_options name=admCoupon options=$myOptions selected=$mySelect}
        </p>
        <p>
            <label for="koris2" id="lab_koris" > Naziv kupona: </label>
            <input id="koris2" name="koris2" type="text" placeholder="xx% Naziv"/>
        </p>
        <p>
            <label id="pdf" for="datum" > PDF </label>
            <input type="file" name="pdf" id="datum" accept="" class="inputfile">

            <label id="img" for="vrijeme" > Slika </label>
            <input type="file" id="vrijeme" name="img" accept="image/*" class="inputfile" >
        </p>
        <p class="form_gumb">
            <button class="gumb_prijava" id="admCoupon" ><i id="ikona" class="material-icons">&#xE163;</i>  POŠALJI</button>
        </p>
    </form>
</section>

<script src="./js/admFileUpload.js"></script>