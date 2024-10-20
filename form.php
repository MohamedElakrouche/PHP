

<form action="thanks.php" method="post">

    <ul>

        <li> <label for="name" > Votre nom</label>
                <input type="text" id="name" name="user_name">      
        </li>
        <li> <label for="surname" > Votre prénom</label>
                <input type="text" id="surname" name="user_surname">      
        </li>
        <li> <label for="phone" > Votre numéro de téléphone</label>
                <input type="number" id="phone" name="user_phone">      
        </li>
        <li> <label for="mail">Votre mail</label>
                <input type="email" id="mail" name="user_mail">
        </li>
        <li> <label for="message"></label>
            <textarea name="user_message" id="message">Ici votre message</textarea>
        </li>
        <fieldset>
    <legend>Veuillez sélectionner le sujet</legend>
    
    <div>
        <label for="sujet1">Sujet 1</label>
        <input type="checkbox" id="sujet1" name="checklist" value="Sujet 1">
    </div>

    <div>
        <label for="sujet2">Sujet 2</label>
        <input type="checkbox" id="sujet2" name="checklist" value="Sujet 2">
    </div>

    <div>
        <label for="sujet3">Sujet 3</label>
        <input type="checkbox" id="sujet3" name="checklist" value="Sujet 3">
    </div>

    <div>
        <label for="sujet4">Sujet 4</label>
        <input type="checkbox" id="sujet4" name="checklist" value="Sujet 4">
    </div>
</fieldset>

<li> 
    <button type="submit">Valider</button>
</li>

    </ul>
    
   
</form>

