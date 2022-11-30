


function Validator(options){
	
	var selectorRules = {};

	// Hàm thực hiện Validate
	function validate(inputElement,rule){
		var errorMessage;
		var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
		
		// Lấy ra các rules của selector
		var rules = selectorRules[rule.selector];

		// Lặp qua từng rule và kiểm tra
		// Nếu có lỗi thì dừng việc kiểm tra
		for (var i = 0; i < rules.length; ++i){
			errorMessage = rules[i](inputElement.value);
			if (errorMessage) break;
		}

		if(errorMessage){
			errorElement.innerText = errorMessage;
			inputElement.parentElement.classList.add('invalid');
		}else{
			errorElement.innerText = ' ';
			inputElement.parentElement.classList.remove('invalid');
		}
		// console.log(!!errorMessage);
		return !!errorMessage;
	
	}
	
	// Lấy element của form cần Validate
	var formElement = document.querySelector(options.form);

	if(formElement) {

		formElement.onsubmit = function(e){
			e.preventDefault();
			
			var isFormValid = true;

			// Lặp qua từng rule và Validate
			options.rules.forEach(function (rule){
				var inputElement = formElement.querySelector(rule.selector);
				validate(inputElement,rule);
				if(!isFormValid) {
					isFormValid = false;
				}
			});

			if(isFormValid){
				if(typeof options.onSubmit === 'function'){

					var enableInputs = formElement.querySelectorAll('[name]');

					var formValues = Array.from(enableInputs).reduce(function (values, input){
						return (values[input.name] = input.value) && values;
					},{}) ;

					options.onSubmit({formValues});
				}

				// Trường hợp submit với hành vi mặc định
				else{
					formElement.submit();				
				}
			}
		}

		// Xử lý lặp qua mỗi rule và xử lý (lắng nghe sự kiện blur, input,..)
		options.rules.forEach(function (rule){

			// Lưu lại các rules cho mỗi input
			selectorRules[rule.selector] = rule.test;

			if(Array.isArray(selectorRules[rule.selector])){
				selectorRules[rule.selector].push(rule.test);
			}else {
				selectorRules[rule.selector] = [rule.test];
			}

			var inputElement = formElement.querySelector(rule.selector);
			
			
			if(inputElement) {
				// Xử lý trường hợp blur khỏi input
				inputElement.onblur = function() {
					validate(inputElement,rule)
					
				// Xử lý mỗi khi người dùng nhập vào input
				inputElement.oninput = function(){
					var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
					errorElement.innerText = '';
					inputElement.parentElement.classList.remove('invalid')
				}  

					
				}
			}
		});
	}
}


// Định nghĩa rules
// Nguyên tắc của các rules:
// Khi có lỗi => Trả ra message lỗi
// Hợp lệ => Không trả gì cả
Validator.isRequired = function (selector) {
	return {
		selector: selector,
		test: function(value){
			return value ? undefined : 'Vui lòng nhập trường này'
		}	
	};
}


Validator.isEmail = function (selector) {
	return {
		selector: selector,
		test: function(value){
			var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			return regex.test(value) ? undefined : 'Vui lòng nhập đúng định dạng email';
		}	
	};
}

Validator.minLength = function(selector, min){
	return {
		selector: selector,
		test: function (value){
			return value.length >= min ? undefined : `Nhập vào tối thiểu ${min} ký tự`
		}
	}
}

Validator.isRepassword = function(selector,getConfirmValue, message){
	return {
		selector:selector,
		test: function (value) {
			return value === getConfirmValue() ? undefined : message || 'Giá trị nhập vào không chính xác';
		}
	}
}