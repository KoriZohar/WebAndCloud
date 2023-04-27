var gWidth = 80
var gHeight = 80
var currBoxes = 0

var selectedCard = undefined
var selectedLetter = undefined
var chosenLetter = undefined

function startGame() {
    let objButton = document.createElement("article")
    let gButton = new box()

    objButton.style.backgroundColor = "black"
    objButton.style.position = "relative"
    objButton.style.width = gButton.getWidth()+"px"
    objButton.style.height = gButton.getHeight()+"px"
    
    document.getElementById("add_box").appendChild(objButton)

    objButton.onclick = function () { initialize() }
}

class box {
    constructor() {
        this.width = 80;
        this.height = 80;
    }

    getWidth() {
        return this.width;
    }
    getHeight() {
        return this.height;
    } 

    setWidth(value) {
        this.width = value;
    }
    setHeight(value) {
        this.height = value;
    }       
}

function initialize() {
    let b = new box()
    const maxBoxes = 9
    currBoxes += 3

    if(currBoxes <= maxBoxes) {
        for(i=0; i<3; i++) {
            articleObj = document.createElement("article")

            articleObj.style.backgroundColor = "black"
            articleObj.style.margin = "40px"
            
            b.setWidth(gWidth)
            b.setHeight(gHeight)

            articleObj.style.width = b.getWidth()+"px"
            articleObj.style.height = b.getHeight()+"px"

            gHeight = b.getHeight()+20
            gWidth = b.getWidth()+20

            articleObj.style.display = "flex"
            articleObj.style.justifyContent = "center"
            articleObj.style.alignItems = "center"

            document.getElementById("boxes_area").appendChild(articleObj)

            let cardObj = document.createElement("h1")
            cardObj.innerText = genRandLetter()
            cardObj.style.visibility = "hidden"
            cardObj.style.color = "White"
            articleObj.appendChild(cardObj)

            articleObj.onclick = function() {
                if(currBoxes < 6)
                {
                    window.alert("Create more boxes to start game :)")
                    return
                }
                
                if(cardObj.style.visibility == "hidden") {
                        cardObj.style.visibility = "visible"
                }
                else return

                if(selectedCard == undefined) {
                    selectedCard = this
                    selectedLetter = cardObj
                    return
                }

                if(this.innerText == selectedCard.innerText) {
                    this.style.backgroundColor = "pink"
                    selectedCard.style.backgroundColor = "pink"
                    selectedCard = undefined
                }
                else setTimeout(function(){
                    cardObj.style.visibility = "hidden"
                    selectedLetter.style.visibility = "hidden"
                    selectedCard = undefined
                    return
                },600)
            }
        }
    }
    else {
        window.alert("Max boxes were created!")
    }
}

function createBoxes() {
    document.getElementById("add_box").style.visibility = initialize()
}

function genRandLetter() {
    var items = ['a', 'b', 'c', 'd', 'e', 'f'];
    var chosen = items[Math.floor(Math.random()*currBoxes)]

    return chosen
}