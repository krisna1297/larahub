<!DOCTYPE html>
<html>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="{{ route('welcome') }}" method="post">
        @csrf
        <label for="first_name">First name:</label>
        <br />
        <input type="text" name="first_name" id="first_name">
        <br /><br />
        <label for="last_name">Last name:</label>
        <br />
        <input type="text" name="last_name" id="last_name">
        <br /><br />
        <label>Gender:</label>
        <br />
        <input type="radio" name="gender" id="gender_m" value="male"> <label for="gender_m">Male</label><br />
        <input type="radio" name="gender" id="gender_f" value="female"> <label for="gender_f">Female</label><br />
        <input type="radio" name="gender" id="gender_o" value="other"> <label for="gender_o">Other</label><br />
        <br />
        <label for="nationality">Nationality</label>
        <br />
        <select id="nationality" name="nationality">
            <option value="id" selected>Indonesia</option>
            <option value="my">Malaysia</option>
            <option value="uk">United Kingdom</option>
            <option value="us">United States</option>
            <option value="sg">Singapore</option>
            <option value="other">Other</option>
        </select>
        <br /><br />
        <label for="language">Language Spoken:</label>
        <br />
        <input type="checkbox" id="lang-id" name="lang-id" value="id"> <label for="lang-id">Indonesia</label><br />
        <input type="checkbox" id="lang-en" name="lang-en" value="en"> <label for="lang-en">English</label><br />
        <input type="checkbox" id="lang-ot" name="lang-ot" value="ot"> <label for="lang-ot">Other</label><br />
        <br />
        <label for="bio">Bio:</label><br />
        <textarea name="bio" id="bio" rows="8" cols="50"></textarea>
        <br /><br />
        <input type="submit" value="Sign Up" />
    </form>
</body>

</html>