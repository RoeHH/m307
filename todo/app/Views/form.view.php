
    <div class="container">

        <h1 class="welcome">Do das eine Formular<h1>


                <form action="/m307/todo/" method="post">

                    <fieldset form="Test">

                        <label for="shuttlebus">Name:</label><br>
                        <input type="text" name="name"><br>

                        <label>Email: </label><br><input type="email" name="email"><br>

                        <label>Telefon:</label><br> <input type="text" name="phone"><br>
                    </fieldset>
                    <label for="shuttlebus"> Wie viele Personen werden von Ihrer Firma teilnehmen?:</label><br>
                    <input min="0" type="number" name="num_persons"><br>

                    <label>In welchem Hotel möchten Sie übernachten?</label><br>
                    <input type="radio" name="hotel" value="InterContinental Davos">InterContinental Davos</input><br>
                    <input type="radio" name="hotel" value="Steinberger Grandhotel Belvédère">Seteinberg</input><br>

                    <label for="shuttlebus">Wir möchten den Shuttle-Bus-Service beanspruchen:</label><br>
                    <input value="1" type="checkbox" name="shuttlebus"><br>

                    <label>Was möchten Sie am Abend unternehmen?</label><br>
                    <select name="activity">
                        <option value="">Kein Abendprogramm</option>
                        <option value="Billardturnier">Billardturnier</option>
                        <option value="Bowlingturnier">Bowlingturnier</option>
                        <option value="Weindegustation">Weindegustation</option>
                        <option value="Asiatischer Kochkurs">Asiatischer Kochkurs</option>
                        <option value="Tanzkurs für Webentwickler">Tanzkurs für Webentwickler</option>
                        <option value="Ying &amp; Yang Yoga Einsteigerkurs">Ying &amp; Yang Yoga Einsteigerkurs</option>
                    </select><br>

                    <label>Haben Sie sonst noch einen Wunsch oder eine Bemerkung?</label>
                    <br>
                    <textarea name="note" id="note" rows="3"></textarea><br>

                    <input type="submit" name="submit" value="Anmelden">

                </form>

    </div>

    <script src="public/js/app.js"></script>
