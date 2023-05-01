function formValidator(form) {
    const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const text_fields = form.querySelectorAll("input[type='text']");
    const select_fields = form.getElementsByTagName("select");
    const radio_fields = form.querySelectorAll("input[type='radio']");
    const textareas = form.getElementsByTagName("textarea");
    
    // Validate Text 
    for (let i = 0; i < text_fields.length; i++) {
        if (text_fields[i].value == '' || text_fields[i].value == null) {
            alert("All Fields Are Required!!!!");
            return false;
        }
        if (text_fields[i].name == "email" && !regex.test(text_fields[i].value)){
            alert("Invalid Email Format!!!!");
            return false;
        }
    }

    // Validate Textarea
    for (let i = 0; i < textareas.length; i++) {
        if (textareas[i].value == '' || textareas[i].value == null) {
            alert("All Fields Are Required!!!!");
            return false;
        }
    }

    // Validate DropDown Fields
    for (let i = 0; i < select_fields.length; i++) {
        let element = select_fields[i];
        if (element.options[element.selectedIndex].text === 'Select your option') {
            alert("All Fields Are Required!!!!");
            return false;
        }
    }

    // Validate Radio Fields
    for (let i = 0; i < radio_fields.length; i++) {
        let radio_group = document.querySelectorAll('input[name="' + radio_fields[i].name + '"]');
        let isChecked = false;
        for (let j = 0; j < radio_group.length; j++) {
            if (radio_group[j].checked) {
                isChecked = true;
                break;
            }
        }

        if (!isChecked) {
            alert("All Fields Are Required!!!!");
            return false;
        }
    }
    return true;
}
