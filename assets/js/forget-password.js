const validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const handeFormSubmit = () => { // arrow funtion
    // Nếu mà điều kiện cần kiểm tra là thỏa mãn => return true;
    let checkValidate = true;
    let email = $("input[name=email]").val().trim();
    let username =  $("input[name=username]").val().trim();
   
   
     // Check validate của email
    if(!email) {
        alert ("Email không được để trống");
        return false;
    }  else if (!email.match(validRegex)) {// kiểm tra có phải là mail không
        alert("Không đúng định dạng email");
        return false;
    }
    // Check validate của username
    if(!username){ // có ! là không có giá trị hoặc là false
        alert("Tên đăng nhập không được để trống");
        return false;
    } else if(username.indexOf(' ') >= 0) { // Kiểm tra tên chỉ được viết liền không có khoảng trắng
        alert("Tên đăng nhập không được chứa ký tự khoảng trắng");
        return false;
    }
    

    /**
     * const => hằng số => khai báo 1 lần duy nhất và được án giá trị => ko thay đổi được giá vị
     *  */ 
    
    return true;
}
console.log('xxxxx')

