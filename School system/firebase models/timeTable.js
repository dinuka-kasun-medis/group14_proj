//var clzNo="12M3";
function getClassTimeTable(clzNo,school){
    var output;
    db.collection("timetable").where("classNo","==",clzNo).where("schoolId","==",school)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output=doc.data();
            document.getElementById('classNo').value = output.classNo;
            document.getElementById('classTeacher').value = output.classTeacher;//document.getElementById("mytext").value = "My value";
            
            /******************************/
            var d1="monday";
        getTimeSlot("07.50-08.30",d1,'subjectView1','teacherView1',clzNo,school);//subjectVie
        getTimeSlot("08.30-09.10",d1,'subjectView12','teacherView12',clzNo,school);
        getTimeSlot("09.10-09.50",d1,'subjectView13','teacherView13',clzNo,school);
        getTimeSlot("09.50-10.30",d1,'subjectView14','teacherView14',clzNo,school);
        getTimeSlot("10.50-11.30",d1,'subjectView15','teacherView15',clzNo,school);
        getTimeSlot("11.30-12.10",d1,'subjectView16','teacherView16',clzNo,school);
        getTimeSlot("12.10-12.50",d1,'subjectView17','teacherView17',clzNo,school);
        getTimeSlot("12.50-13.30",d1,'subjectView18','teacherView18',clzNo,school);
        
        var d2="tuesday";
        getTimeSlot("07.50-08.30",d2,'subjectView2','teacherView2',clzNo,school);//subjectVie
        getTimeSlot("08.30-09.10",d2,'subjectView22','teacherView22',clzNo,school);
        getTimeSlot("09.10-09.50",d2,'subjectView23','teacherView23',clzNo,school);
        getTimeSlot("09.50-10.30",d2,'subjectView24','teacherView24',clzNo,school);
        getTimeSlot("10.50-11.30",d2,'subjectView25','teacherView25',clzNo,school);
        getTimeSlot("11.30-12.10",d2,'subjectView26','teacherView26',clzNo,school);
        getTimeSlot("12.10-12.50",d2,'subjectView27','teacherView27',clzNo,school);
        getTimeSlot("12.50-13.30",d2,'subjectView28','teacherView28',clzNo,school);
        
        var d3="wednesday";
        getTimeSlot("07.50-08.30",d3,'subjectView3','teacherView3',clzNo,school);//subjectVie
        getTimeSlot("08.30-09.10",d3,'subjectView32','teacherView32',clzNo,school);
        getTimeSlot("09.10-09.50",d3,'subjectView33','teacherView33',clzNo,school);
        getTimeSlot("09.50-10.30",d3,'subjectView34','teacherView34',clzNo,school);
        getTimeSlot("10.50-11.30",d3,'subjectView35','teacherView35',clzNo,school);
        getTimeSlot("11.30-12.10",d3,'subjectView36','teacherView36',clzNo,school);
        getTimeSlot("12.10-12.50",d3,'subjectView37','teacherView37',clzNo,school);
        getTimeSlot("12.50-13.30",d3,'subjectView38','teacherView38',clzNo,school);
        
        var d4="thursday";
        getTimeSlot("07.50-08.30",d4,'subjectView4','teacherView4',clzNo,school);//subjectVie
        getTimeSlot("08.30-09.10",d4,'subjectView42','teacherView42',clzNo,school);
        getTimeSlot("09.10-09.50",d4,'subjectView43','teacherView43',clzNo,school);
        getTimeSlot("09.50-10.30",d4,'subjectView44','teacherView44',clzNo,school);
        getTimeSlot("10.50-11.30",d4,'subjectView45','teacherView45',clzNo,school);
        getTimeSlot("11.30-12.10",d4,'subjectView46','teacherView46',clzNo,school);
        getTimeSlot("12.10-12.50",d4,'subjectView47','teacherView47',clzNo,school);
        getTimeSlot("12.50-13.30",d4,'subjectView48','teacherView48',clzNo,school);
        
        var d5="friday";
        getTimeSlot("07.50-08.30",d5,'subjectView5','teacherView5',clzNo,school);//subjectVie
        getTimeSlot("08.30-09.10",d5,'subjectView52','teacherView52',clzNo,school);
        getTimeSlot("09.10-09.50",d5,'subjectView53','teacherView53',clzNo,school);
        getTimeSlot("09.50-10.30",d5,'subjectView54','teacherView54',clzNo,school);
        getTimeSlot("10.50-11.30",d5,'subjectView55','teacherView55',clzNo,school);
        getTimeSlot("11.30-12.10",d5,'subjectView56','teacherView56',clzNo,school);
        getTimeSlot("12.10-12.50",d5,'subjectView57','teacherView57',clzNo,school);
        getTimeSlot("12.50-13.30",d5,'subjectView58','teacherView58',clzNo,school);
            /*****************************/
           
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
   
    
    
    
    //alert("get time table sucess fully ",output);
    return output;
}


function getTimeSlot(timeLine,dayLine,subCode,lecCode,classNoCk,school){
    
    var output;
    db.collection("timetable").where("classNo","==",classNoCk).where("time","==",timeLine).where("date","==",dayLine).where("schoolId","==",school)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output=doc.data();
            document.getElementById(subCode).value = output.subjectCode;
            document.getElementById(lecCode).value = output.regno;
           
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
    
}

