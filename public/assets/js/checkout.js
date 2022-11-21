
// SELECT CITY/PROVINCE

// var citis = document.getElementById("city");
// var districts = document.getElementById("district");
// var wards = document.getElementById("ward");
// var Parameter = {
//     url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
//     method: "GET",
//     responseType: "application/json",
// };
// var promise = axios(Parameter);
// promise.then(function (result) {
//     renderCity(result.data);
// });

// function renderCity(data) {
//     var addressValues = {};
//     for (const x of data) {
//         citis.options[citis.options.length] = new Option(x.Name, x.Id);
//     }
//     citis.onchange = function () {
//         districts.length = 1;
//         wards.length = 1;
//         if (this.value != "") {
//             const result = data.filter(n => n.Id === this.value);
//             for (const k of result[0].Districts) {
//                 districts.options[districts.options.length] = new Option(k.Name, k.Id);
//             }
//             // citis.setAttribute("value", result[0].Name)
//         }
//     };
//     districts.onchange = function () {
//         wards.length = 1;
//         const dataCity = data.filter((n) => n.Id === citis.value);
//         if (this.value != "") {
//             const dataDistricts = dataCity[0].Districts.filter(n => n.Id === this.value);
//             for (const w of dataDistricts[0].Wards) {
//                 wards.options[wards.options.length] = new Option(w.Name, w.Id);
//             }
//             // districts.setAttribute("value", dataDistricts[0].Name)
//         }
//     };
//     wards.onchange = function () {
//         const dataCity = data.filter((n) => n.Id === citis.value);
//         const dataDistricts = dataCity[0].Districts.filter(n => n.Id === districts.value);
//         if (this.value != "") {
//             const dataWards = dataDistricts[0].Wards.filter(n => n.Id === this.value);
//             // wards.setAttribute("value", dataWards[0].Name)
//         }
//     };
// }

// function renderCity(data) {
//     for (const x of data) {
//         citis.options[citis.options.length] = new Option(x.Name, x.Id);
//     }
//     citis.onchange = function () {
//         district.length = 1;
//         ward.length = 1;
//         if (this.value != "") {
//             const result = data.filter(n => n.Id === this.value);

//             for (const k of result[0].Districts) {
//                 district.options[district.options.length] = new Option(k.Name, k.Id);
//             }
//         }
//     };
//     district.onchange = function () {
//         ward.length = 1;
//         const dataCity = data.filter((n) => n.Id === citis.value);
//         if (this.value != "") {
//             const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

//             for (const w of dataWards) {
//                 wards.options[wards.options.length] = new Option(w.Name, w.Id);
//             }
//         }
//     };
// }
// VALIDATE

// Đối tượng Validator (Constructor fn)
function Validator(options) {

    function getParent(element, selector) {
        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    var selectorRules = {};

    function removeError(inputElement) {
        var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
        errorElement.innerText = '';
        getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
    }

    // Hàm thực hiện validate
    function validate(inputElement, rule) {

        var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
        // var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
        var errorMessage;

        // Lấy ra các rules của selector
        var rules = selectorRules[rule.selector];

        // Lặp qua từng rule & kiểm tra 
        // (nếu có errorMessage thì dừng việc ktra -> lấy errorMessage 
        // lỗi đầu tiên)
        for (var i = 0; i < rules.length; ++i) {
            switch (inputElement.type) {
                case 'radio':
                case 'checkbox':
                    errorMessage = rules[i](
                        formElement.querySelector(rule.selector + ':checked')
                    );
                    break;
                default:
                    errorMessage = rules[i](inputElement.value);

            }
            if (errorMessage) break;
        }

        // console.log(errorMessage);

        if (errorMessage) {
            errorElement.innerText = errorMessage
            getParent(inputElement, options.formGroupSelector).classList.add('invalid');
        } else {
            removeError(inputElement);
        }

        return !errorMessage;
    }

    // Lấy element của form cần validate
    var formElement = document.querySelector(options.form);

    if (formElement) {

        // Khi submit form
        formElement.onsubmit = function (e) {
            e.preventDefault();

            var isFormValid = true;

            // Lặp qua từng rules và validate
            options.rules.forEach(function (rule) {
                var inputElement = formElement.querySelector(rule.selector);
                var isValid = validate(inputElement, rule);
                // console.log(isValid);
                if (!isValid) {
                    isFormValid = false;
                }
            });

            if (isFormValid) {
                // console.log('Không có lỗi');

                // Trường hợp submit với JS
                if (typeof options.onSubmit === 'function') {
                    //                                               [name]:not([disabled])
                    var enableInputs = formElement.querySelectorAll('[name]');
                    // console.log(enableInputs);

                    var formValues = Array.from(enableInputs).reduce(function (values, input) {
                        // console.log(input.type);
                        switch (input.type) {
                            case 'radio':
                                values[input.name] = formElement.querySelector('input[name="' + input.name + '"]:checked').value;
                                break;
                            case 'checkbox':
                                if (!input.matches(':checked')) {
                                    values[input.name] = '';
                                    return values;
                                }
                                if (!Array.isArray(values[input.name])) {
                                    values[input.name] = [];
                                }
                                values[input.name].push(input.value)
                                break;
                            case 'file':
                                values[input.name] = input.files;
                                break;
                            default:
                                values[input.name] = input.value;
                        }
                        return values;
                        // return (values[input.name] = input.value) && values;
                        // Gán input.value cho object values sau đó return ra object values
                    }, {});

                    // console.log(formValues);

                    options.onSubmit(formValues)
                }
                // Trường hợp submit với hành vi mặc định
                else {
                    formElement.submit();
                }
            }
        }

        // Lặp qua mỗi rule và xử lý (lắng nghe sự kiện blur, input)
        options.rules.forEach(function (rule) {
            // Lưu lại các rules cho mỗi input
            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test)
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            var inputElements = formElement.querySelectorAll(rule.selector); // nodeList

            Array.from(inputElements).forEach(function (inputElement) {
                // Xử lý trường hợp blur khỏi input
                inputElement.onblur = function () {
                    validate(inputElement, rule);

                }

                // Xử lý mỗi khi người dùng nhập vào input
                inputElement.oninput = function () {
                    removeError(inputElement);

                }

            });
        });
    }
}

// Định nghĩa rules
// Nguyên tắc của các rules:
// 1. Khi có lỗi => Trả ra message lỗi
// 2. Khi hợp lệ => Không trả về cái gì cả
Validator.isRequired = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            return value ? undefined : message || 'Vui lòng nhập trường này'
        }
    }
}

Validator.isEmail = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : message || 'Vui lòng nhập đúng email'
        }
    }
}

Validator.isPhone = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /(84|0[3|5|7|8|9])+([0-9]{8})\b/g;
            return regex.test(value) ? undefined : message || 'Vui lòng nhập đúng số điện thoại'
        }
    }
}

Validator.minLength = function (selector, min, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.length >= min ? undefined : message || `Vui lòng nhập tối thiểu ${min} kí tự`;
        }
    }
}

Validator.isConfirmed = function (selector, getConfirmValue, message) { // message: custom message
    return {
        selector: selector,
        test: function (value) {
            return value === getConfirmValue() ? undefined : message || `Giá trị nhập vào không chính xác`;
        }
    }
}