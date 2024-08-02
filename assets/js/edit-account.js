const validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const handeFormSubmit = () => { // arrow funtion
    // Nếu mà điều kiện cần kiểm tra là thỏa mãn => return true;
    let checkValidate = true;
  
    let fullname =  $("input[name=fullname]").val().trim();
    let phone = $("input[name=phone]").val();
    let gender = $("input[name=gender]:checked").val();
    let birthday = $("input[name=birthday]").val(); 
   
    // Check validate của username
  
    // Check validate của email
    if(!fullname){ 
        alert("Tên đầy đủ không được để trống");
        return false;
    } 

    if(!phone){ 
        alert("Số điện thoại không được để trống");
        return false;
    } else if(!isNum(phone)) {
        alert("Số điện thoại phải là số");
        return false;
    } else if(phone.length !== 10){
        alert("Số điện thoại phải có 10 số");
        return false;
    }


    if(!birthday){ 
        alert("Ngày sinh không được để trống");
        return false;
    } else if(!Date.parse(birthday)) {
        alert("Ngày sinh chưa điền đủ thông tin");
        return false;
    }



    // Check validate fullname => không được để trống
    // Check validate password => không được để trống, min: 3 ký tự, max: 15 ký tự
    // Check validate re_password => không được khác password
    // Check validate phone => không được bỏ trống, phải là số, đủ 10 ký tự
    // Check validate birthday => không được bỏ trống





    /**
     * const => hằng số => khai báo 1 lần duy nhất và được án giá trị => ko thay đổi được giá vị
     *  */ 
    
    return true;
}



const handeSubmitDelete = () => {
    // Hỏi yêu cầu có muốn xóa hay không?
    return (confirm('Bạn có muốn xóa tài khoản hay không?'));
}

