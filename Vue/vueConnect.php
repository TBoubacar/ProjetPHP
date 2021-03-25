<?php $this->titre = "Connexion"; ?>


    
        <div
            style="
            width:400px;
            margin:0 auto;
            margin-top:10%
            ">
            <!-- zone de connexion -->
            
            <form action="index.php?action=connexion" method="POST"
            style="
            width:100%;
            padding: 30px;
            border: 1px solid #f1f1f1;
            background: #fff;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24)"
            >
                <h1
                style="
                width: 38%;
                margin: 0 auto;
                padding-bottom: 10px;"
                >
                Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'Utilisateur" name="login" required
                style="
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;"
                >

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="passWord" required
                style="
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;"
                >

                <input type="submit" id='submit' value='SE CONNECTER' 
                style="
                background-color: #53af57;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;"
                >
            
            </form>
        </div>
    