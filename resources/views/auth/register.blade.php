<x-layout>
    <x-page-heading> Register </x-page-heading>
    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Your Full Name" name="name" required/>
        <x-forms.input label="Email" name="email" required/>
        <x-forms.input label="Password" name="password" type="password" required/>
        <x-forms.input label="Passwrod Confirmation" name="password_confirmation" type="password" required/>

        <x-forms.divider />

        <x-forms.input label="handle" name="handle" required/>
        <x-forms.input label="title" name="title" required/>
        <x-forms.input label="Bio" name="bio" required/>
        <x-forms.input label="Location" name="location" required/>
        <x-forms.input label="Website" name="website" required/>
        <x-forms.input label="GitHub" name="github" required/>
        <x-forms.input label="LinkedIn" name="linkedin" required/>
        <x-forms.input label="Avatar" name="avatar" type="file" required/>

        <x-forms.button type="submit" >Create Account</x-forms.button>


    </x-forms.form>
</x-layout>