
axios.defaults.withCredentials = true;
axios.defaults.withXSRFToken = true;
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

function login(){
    let username = document.getElementById('username');
    let password = document.getElementById('password');

    let data = {
        username: username.value,
        password: password.value,
    };
    axios.post('/api/login',data)
        .then((res)=>{
            console.log(res)
            localStorage.token = res.data[1];
            window.axios.defaults.headers.common['Authorization'] = 'Bearer '+ localStorage.token;
            // window.location.href = '';
        }).catch((cat)=>{
        console.log(cat);
    });
}
