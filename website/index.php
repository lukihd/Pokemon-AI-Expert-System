<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Pokedb</title>
</head>
<body>
    <header>
        <h1>Welcome to POKEDB</h1>
    </header>

    <div id="requestPoke">
        <?php include "request.php"; ?>
    </div>

    <br/>
    <div id="addPokeInfo">
        <!-- show image and id of actual poke -->
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <div>
                <label>Nom du Pokémon</label>
                <input type="text" name="name" placeholder="nom du pokémon">
            </div>
            <div>
                <label>Type principal du Pokémon</label>            
                <select name="type_1" selected>
                    <option value='normal' selected>normal</option>
                    <option value='combat'>combat</option>
                    <option value='acier'>acier</option>
                    <option value='feu'>feu</option>
                    <option value='eau'>eau</option>
                    <option value='plante'>plante</option>
                    <option value='roche'>roche</option>
                    <option value='sol'>sol</option>
                    <option value='electrique'>electrique</option>
                    <option value='insecte'>insecte</option>
                    <option value='poison'>poison</option>
                    <option value='fee'>fée</option>
                    <option value='glace'>glace</option>
                    <option value='dragon'>dragon</option>
                    <option value='psy'>psy</option>
                    <option value='spectre'>spectre</option>
                    <option value='tenebre'>ténèbre</option>
                    <option value='vol'>vol</option>
                </select>
                <label>Type secondaire du Pokémon</label>            
                <select name="type_2">
                    <option value='NULL' selected>null</option>
                    <option value='normal'>normal</option>
                    <option value='combat'>combat</option>
                    <option value='acier'>acier</option>
                    <option value='feu'>feu</option>
                    <option value='eau'>eau</option>
                    <option value='plante'>plante</option>
                    <option value='roche'>roche</option>
                    <option value='sol'>sol</option>
                    <option value='electrique'>electrique</option>
                    <option value='insecte'>insecte</option>
                    <option value='poison'>poison</option>
                    <option value='fee'>fée</option>
                    <option value='glace'>glace</option>
                    <option value='dragon'>dragon</option>
                    <option value='psy'>psy</option>
                    <option value='spectre'>spectre</option>
                    <option value='tenebre'>ténèbre</option>
                    <option value='vol'>vol</option>
                </select>
                <label>Type de génération du Pokémon</label>            
                <select name="type_3">
                    <option value='NULL' selected>null</option>
                    <option value='normal'>normal</option>
                    <option value='combat'>combat</option>
                    <option value='acier'>acier</option>
                    <option value='feu'>feu</option>
                    <option value='eau'>eau</option>
                    <option value='plante'>plante</option>
                    <option value='roche'>roche</option>
                    <option value='sol'>sol</option>
                    <option value='electrique'>electrique</option>
                    <option value='insecte'>insecte</option>
                    <option value='poison'>poison</option>
                    <option value='fee'>fée</option>
                    <option value='glace'>glace</option>
                    <option value='dragon'>dragon</option>
                    <option value='psy'>psy</option>
                    <option value='spectre'>spectre</option>
                    <option value='tenebre'>ténèbre</option>
                    <option value='vol'>vol</option>
                </select>
            </div>
            <div>
                <label>Palier d'évolution du Pokémon</label>            
                <select name="stage_evolution">
                    <option value="0">base</option>
                    <option value="1">palier 1</option>
                    <option value="2">palier 2</option>
                </select>
                <label>A-t-il une méga évolution</label>            
                <input type="checkbox" name="mega_evolution" value="1">
            </div>
            <div>
                <label>Est-il légendaire</label>
                <input type="checkbox" name="legendary" value="1">
            </div>
            <div>
                <label>Est-ce un starter</label>
                <input type="checkbox" name="starter" value="1">
            </div>
            <div>
                <label>Genre du Pokémon</label>            
                <select name="gender">
                    <option value="MF">male et femelle</option> 
                    <option value="male">mâle</option>
                    <option value="femelle">femelle</option>
                    <option value="asexue">asexué</option>
                </select>
            </div>
            <div>
                <label>Génération du Pokémon</label>            
                <select name="generation">
                    <option value="1">génération 1</option>
                    <option value="2">génération 2</option>
                    <option value="3">génération 3</option>
                    <option value="4">génération 4</option>
                    <option value="5">génération 5</option>
                    <option value="6">génération 6</option>
                    <option value="7">génération 7</option>
                </select>
            </div>
            <div>
                <label>Région d'origine du Pokémon</label>            
                <select name="region">
                    <option value="kanto">kanto</option>
                    <option value="jotho">jotho</option>
                    <option value="hoenn">hoenn</option>
                    <option value="sinnoh">sinnoh</option>
                    <option value="unova">unova</option>
                    <option value="kalos">kalos</option>
                    <option value="alola">alola</option>
                </select>
            </div>
            <div>
                <label>Couleur principale du Pokémon</label>            
                <select name="color">
                    <option value="rouge">rouge</option>
                    <option value="jaune">jaune</option>
                    <option value="bleu">bleu</option>
                    <option value="violet">violet</option>
                    <option value="vert">vert</option>
                    <option value="orange">orange</option>
                    <option value="noir">noir</option>
                    <option value="blanc">blanc</option>
                    <option value="gris">gris</option>
                    <option value="marron">marron</option>
                    <option value="rose">rose</option>
                    <option value="beige">beige</option>
                </select>
            </div>
            <div>
                <label>Caractéristique principale</label>
                <select name="detail">
                    <option value="griffe">griffe</option>
                    <option value="sabot">sabot</option>
                    <option value="aile">aile</option>
                    <option value="corne">corne</option>
                    <option value="croc">croc</option>
                    <option value="bec">bec</option>
                    <option value="nageoire">nageoire</option>
                    <option value="carapace">carapace</option>
                    <option value="vegetal">vegetal</option>
                </select>
            </div>
            <input type="submit" value="envoyer" name="submit">
        </form>
    </div>    
</body>
</html>