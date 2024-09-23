let profile = document.getElementById('profile');
let profileIsVisi = true;
function showProfileMenu(){
    if (profileIsVisi){
        let profileOriginalHeight = profile.offsetHeight + 4;
        let profileOriginalWidth = profile.offsetWidth - 18 ;
        profile.children[0].style.display = 'none';
        profile.children[1].style.display = 'flex';
        profile.children[2].children[0].style.transform = "rotate(90deg)";
        profile.children[2].children[0].style.fill = "#fff";
        profile.style.margin = "0";
        profile.style.height = profileOriginalHeight + 'px';
        profile.style.width = profileOriginalWidth + 'px';
        profile.style.backgroundColor = '#32c8a7'
    }else {
        profile.children[0].style.display = 'flex';
        profile.children[1].style.display = 'none';
        profile.children[2].children[0].style.transform = "rotate(0deg)";
        profile.children[2].children[0].style.fill = "#4a5568";
        profile.style.margin = "4px 0";
        profile.style.height = '';
        profile.style.width ='';
        profile.style.backgroundColor = '#fff'
    }
    profileIsVisi = !profileIsVisi;
}
