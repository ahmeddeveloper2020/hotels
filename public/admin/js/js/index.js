var vm = new Vue({
    el: "#main",
    data: {
		n: 1,
    	items:[
		
        ],
		items2:[
              
        ],
        items4:[
			
        ],
		products: [],
        newNo: 0 , 
		result: 0,
		dragR : false,
		back_img: 'img/background2.png'
    },
	mounted: function(){
		this.allRecords();
	},
    methods:{
        insertItem: function(){
          var self = this;
          var no = 0;
          /*　
          if(self.items.concat().length > 0){
              no =  Math.max.apply(null, self.items.concat().map(function(item){return item.no;})) +1;

              self.newNo = self.newNo < no ? no:self.newNo;
          }
            */
            if(self.items4.concat().length > 0){
                no =  Math.max.apply(null, self.items4.concat().map(function(item){return item.no;})) +1;

                self.newNo = self.newNo < no ? no:self.newNo;
            }
		  
          this.items4.push(
            {
              no:　this.newNo,
              name:'item'+ this.newNo,
              categoryNo:'1'
            }
          );
        },
        deleteItem: function(item, index, group){
            switch (group) {
                case '1':
                    this.items.splice(index, 1);;
					var res =0;
					this.items.forEach(function (val , key) {
						console.log(val.price);
						res += parseFloat(val.price); 
					});
					this.result = res.toFixed(2);
                    break;
				case '2':
                    this.items2.splice(index, 1);
                    break;
                case '4':
                    this.items4.splice(index, 1);
                    break;
            }
        },
		allRecords: function(){
			var self = this;
			axios.get('server/ajaxfile.php')
			.then(function (response) {
				self.products = response.data;
			})
			.catch(function (error) {
				console.log(error);
			});
		},
		recordByID: function(){
			if(this.id > 0){
				var self = this;
				axios.get('server/ajaxfile.php', {
					params: {
						id: this.id
					}
				})
				.then(function (response) {
					self.products = response.data;
				})
				.catch(function (error) {
					console.log(error);
				});
			}
			
		}
	},
	
    computed: {
        myList: {
			
            get() {
                return this.items;
            },
            set(value) {
				console.log(this.n);
                this.items = value;
				
				var res =0;
				this.items.forEach(function (val , key) {
					console.log(val.price);
					res += parseFloat(val.price); 
				});
				this.result = res.toFixed(2);
            }
        },
        
		myList2: {
            get() {
                return this.items2;
            },
            set(value) {
                this.items2 = value;
			}
        },
		
        myList4: {
            get() {
                return this.items4;
            },
            set(value) {
                this.items4 = value;	
			}
        },
		custom: function (){
			return "col-md-"+(12/this.n) +" col-sm-"+(12/this.n);
		},
		dragRemo: function(){
			return dragR = true;
		},
    }
});

new Vue({
  el: '.app'
});
