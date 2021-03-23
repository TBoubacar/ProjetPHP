<?php $this->titre = "Connexion"; ?>


    
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="index.php?action=admin" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'Utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='SE CONNECTER' >
            
            </form>
        </div>
    