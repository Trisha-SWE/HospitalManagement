

var app = express();


app.set('view engine ', 'ejs');




app.use(express.static('./public'));
app.use(bodyParser.urlencoded({extended : true}));
app.use(bodyParser.json());
app.use(cookie());
//app.use(expressValidator());


var server =app.listen(3000 , function(){

    console.log('server started');
});



app.use('/login' ,login);
app.use('/home' , home);
app.use('/signup' , signup);
app.use('/doctors', doc_controller);
app.use('/resetpassword' ,reset);
app.use('/setpassword',set);
app.use('/employee',employee);
app.use ('/logout',logout);
app.use ('/verify', verify);
app.use ('/store',store);
app.use ('/',landing);
app.use ('/complain',complain);
app.use ('/inbox',inbox);
app.use ('/appointment',appointment);
app.use('/receipt',receipt);

// app.use('/doctors/add_doctor',add_doc);
