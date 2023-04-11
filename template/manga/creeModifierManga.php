<div class="flex justify-content-space-evenly">
        <div class="flex ">
            <form action="" method="post">
                <fieldset>
                    <legend>crée manga</legend>
                        <div>
                            <label for="">auteur</label>
                            <input type="text" id="auteur" name="auteur" placeholder="nom de l'auteur">
                        </div>
                        <div>
                            <label for="livre">le livre</label>
                            <input type="text" id="livre" name="livre" required placeholder="nom du livre">
                        </div>
                        <div>
                            <label for="genre">genre</label>

                            <select name="genre" id="genre">
                                <option value="">--choisi le genre--</option>>
                                
                                <?php foreach($genres as $genre) : ?>
                                
                                    <option value="<?= $genre -> genreNom ?>"><?= $genre -> genreNom ?></option>
                                <?php endforeach ?>

                            </select>
                        </div>
                </fieldset>
                    <div class="flex justify-content-space-evenly">
                        <input type="submit" name="button" value="Button">
                    </div>
                        
            </form>
        </div>
    </div>