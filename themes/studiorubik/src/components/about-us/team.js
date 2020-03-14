// import './_team.scss';

function teamProfiles() {

    let figure = $(".honeycomb-cell").hover(hoverVideo, hideVideo);

    function hoverVideo(e) {  
        $('video', this).get(0).play(); 
    }
    
    function hideVideo(e) {
        $('video', this).get(0).pause(); 
    }

    console.log('video team');

}

export default teamProfiles;