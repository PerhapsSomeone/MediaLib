let dirPath = "";

function getFiles(path = "") {

    if(path === "") {
        dirPath = "";
    } else {
        dirPath += path + "/";
    }

    fetch("file_api.php?path=" + dirPath)
        .then((res) => {return res.json() })
        .then((res) => {
            document.getElementById("files").innerHTML = "";
            let newFiles = "";
            newFiles += "<i class=\"fas fa-folder fa-fw\"></i>Back to Root<button style='position: absolute; right: 0; color: white; padding: 0; border: none; background: none;' onclick='backToRoot()'><i class=\"fas fa-arrow-left\"></i></button><hr />";
            res.forEach((el) => {
                if(el[1] === true) {
                    // When the file is a directory
                    newFiles += "<i class=\"fas fa-folder fa-fw\"></i>" + el[0] + "<button style='position: absolute; right: 0; color: white; padding: 0; border: none; background: none;' onclick='getFiles(\""+ el[0] + "\")'><i class=\"fas fa-chevron-down\"></i></button><hr />";
                } else {
                    // When the file is a simple file
                    newFiles += "<i class=\"fas fa-file fa-fw\"></i>" + el[0] + "<a style='position: absolute; right: 0;' href='view_file.php?path=" + dirPath + "&file=" + el[0] + "'><i class=\"fas fa-external-link-alt\"></i></a><hr />";
                }
            });
            document.getElementById("files").innerHTML = newFiles;
        });
}

function backToRoot() {
    dirPath = "";
    getFiles();
}