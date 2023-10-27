<form action="formdata.php" method="GET">
        <div>
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div>
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div>
          <label for="Telefon" class="form-label">Telefon</label>
          <input type="tel" name="Telefon" id="Telefon" class="form-control">
        </div>

        <div>
          <label for="date" class="form-label">Geburtstag</label>
          <input type="date" name="date" id="date" min="2007-22-09" class="form-control">
        </div>
        <div>
          <h3>bevorzugte Ernährung:</h3>
          <select title="ernährung" class="form-select">
            <option value="Allesfresser">Allesfresser</option>
            <option value="Vegetarier">Vegetarier</option>
            <option value="Vegan">Veganer</option>
            <option value="pescetarier">Pescetarier</option>
          </select>
        </div>

        <h3>Unverträglichkeiten</h3>
        <div class="form-check">
          <input title="Nüsse" for="nüsse" type="checkbox" class="form-check-input" />
          <label for="nüsse">Nüsse</label>
        </div>
        <div class="form-check">
          <input title="milchprodukte" for="milchprodukte" type="checkbox" class="form-check-input" />
          <label for="milchprodukte">Milchprodukte</label>
        </div>
        <div class="form-check">
          <label for="andere">Andere</label>
          <input title="andere" for="andere" type="text" class="form-control" />
        </div>

        <div>
          <h3>Geschlecht:</h3>
          <div>
            <label for="male" class="form-label">Male</label>
            <input type="radio" name="gender" id="male" value="male">
          </div>
          <div>
            <label for="female" class="form-label">Female</label>
            <input type="radio" name="gender" id="female" value="female">
          </div>
          <div>
            <label for="diverse" class="form-label">Diverse</label>
            <input type="radio" name="gender" id="diverse" value="diverse">
          </div>
        </div>

        <div>
          <label>
            <h3>Password</h3>
            <input type="password" name="password" required>
          </label>
        </div>

        <button type="reset">Reset</button>
        <button type="submit">Submit</button>
      </form>