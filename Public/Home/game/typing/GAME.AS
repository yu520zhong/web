package{
	import flash.display.Sprite;
	import flash.display.MovieClip;
	import flash.events.MouseEvent;
	import flash.display.StageAlign;
	import flash.display.StageScaleMode;
	import flash.utils.setTimeout;
	import flash.utils.Timer;
	import flash.events.TimerEvent;
	import flash.events.Event;
	import flash.events.KeyboardEvent;
	import flash.text.TextField;
	import flash.display.DisplayObject;
	import flash.text.TextField;
	import flash.text.TextFormat;
	import flash.text.TextFieldAutoSize;
	import flash.display.SimpleButton;
	public class Game extends Sprite{
		private var Fruit_MC:MovieClip = new MovieClip();
		private var Score_MC:MovieClip;
		private var Score:uint = 0;//初始分数
		private var Get_Num:uint = 0; //击中个数
		private var Lose_Num:uint = 0;//丢失个数
		private var myTimer:Timer;//计时器 
		private var loseNum:int = 20;//丢失20个即失败
		private var getNum:int =50;//击中50个即胜利
		private var False_MC:MovieClip;
		private var Win_MC:MovieClip;
		private var bool:Boolean;
		public function Game(){
			stage.scaleMode=StageScaleMode.EXACT_FIT ;
			//整个应用程序在指定区域中可见，但不尝试保持原始高宽比
			stage.align=StageAlign.TOP_LEFT;
			//舞台顶部左对齐
			init();//初始化
		}
		private function init():void{
			Btn_MC.Play_Btn.addEventListener(MouseEvent.CLICK,playGame);
			//侦听“开始”按钮的鼠标单击事件，调用playGame()函数开始游戏
			Btn_MC.Intro_Btn.addEventListener(MouseEvent.CLICK,GameIntro);
			//侦听“说明”按钮的鼠标单击事件，调用GameIntro()函数弹出游戏说明界面
		}
		//开始游戏
		private function playGame(event:MouseEvent):void{
			BG.alpha=0.8;
			//定义背景的Alpha透明度
			stage.addEventListener(KeyboardEvent.KEY_DOWN,keyDown);
			//侦听键盘的按下事件
			hideAll(root); 
			//隐藏游戏开始界面
			Score_Show();  //显示记录分数
			Fruit_Show(null); //开始掉落苹果
			var delay:uint = 2000;
			//定义掉落苹果的间隔时间
			var repeat:uint  = 100;
			//定义掉落苹果的次数
			myTimer = new Timer(delay,repeat);
			//创建Timer实例
			myTimer.addEventListener(TimerEvent.TIMER,Fruit_Show);
			//侦听Timer实例的时间事件，并调用Fruit_Show()函数开始掉落苹果
			myTimer.start();
			//启动计时器
			addEventListener(Event.ENTER_FRAME,False);
			//侦听时间轴事件，判断是否到达失败条件
			addEventListener(Event.ENTER_FRAME,Win);
			//侦听时间轴事件，判断是否到达胜利条件
		}
		//失败
		private function False(event:Event):void{
			if (Lose_Num>=loseNum){
			//如果丢失苹果的个数大于等于游戏设置的个数20
				removeEventListener(Event.ENTER_FRAME,False);
				removeEventListener(Event.ENTER_FRAME,Win);
				//移除侦听时间轴事件
				myTimer.reset();
				//如果计时器正在运行，则停止计时器，并将currentCount属性设回为0
				myTimer.removeEventListener(TimerEvent.TIMER,Fruit_Show);
				//移除侦听Timer实例的时间事件
				Del_All();
				//删除舞台中所有苹果
				removeChild(Fruit_MC);
				//将苹果容器删除
				False_MC = new false_mc();
				//实例化游戏失败界面对象
				False_MC.x = stage.stageWidth/2;
				False_MC.y = stage.stageHeight/2;
				//定义游戏失败界面的位置
				addChild(False_MC);
				//将游戏失败界面显示在舞台中
				bool=false;
				//定义游戏失败
				False_MC.Replay_Btn.addEventListener(MouseEvent.CLICK,Replay);
				//侦听重新开始按钮的鼠标单击事件，调用Replay()函数重新开始游戏
			}
		}
		//重新开始
		private function Replay(event:MouseEvent):void{
			Score=0;
			Get_Num=0;
			Lose_Num=0;
			//将总分数、击中数和丢失数设置为0
			Score_MC.Score_Text.text="0";
			Score_MC.Get_Text.text="0";
			Score_MC.Lose_Text.text="0";
			//将总分数、击中数和丢失数动态文本的值设置为0
			if (bool==false){
			//如果为失败条件
				removeChild(False_MC);
				//移除游戏失败界面
			}else{
				removeChild(Win_MC);
				//移除游戏胜利界面
			}
			playGame(null)
			//开始游戏
		}
		//胜利
		private function Win(event:Event):void{
			if (Get_Num>=getNum){
			//如果击中个数大于等于游戏设置的击中个数50
				removeEventListener(Event.ENTER_FRAME,False);
				removeEventListener(Event.ENTER_FRAME,Win);
				//移除侦听时间轴事件
				myTimer.reset();
				myTimer.removeEventListener(TimerEvent.TIMER,Fruit_Show);
				Del_All();
				removeChild(Fruit_MC);
				Win_MC = new win_mc();
				//实例化游戏胜利界面对象
				Win_MC.x = stage.stageWidth/2;
				Win_MC.y = stage.stageHeight/2;
				//定义游戏胜利界面对象的位置
				addChild(Win_MC);
				//将游戏胜利界面对象显示在舞台中
				bool=true;
				Win_MC.Replay_Btn.addEventListener(MouseEvent.CLICK,Replay)
				//侦听“重新开始”按钮的鼠标单击事件
			} 
		}
		private function Score_Show():void{
			var rect:Sprite = new Sprite();
			//创建Sprite对象
			var w:int = stage.stageWidth;
			var h:int = 40;
			//定义对象的宽度和高度
			var X:int = 0;
			var Y:int = stage.stageHeight-h;
			//定义对象的坐标
			rect.graphics.beginFill(0x000000);
			rect.graphics.drawRect(X,Y,w,h)
			rect.graphics.endFill();
			//根据指定参数绘制一个矩形
			rect.alpha=0.5;
			//定义矩形的Alpha透明度
			addChild(rect);
			//将矩形显示在舞台中
			Score_MC = new score();
			//实例化显示分数界面对象
			Score_MC.x = 20;
			Score_MC.y = Y;
			//定义显示分数界面的位置
			addChild(Score_MC);
			//将显示分数界面显示在舞台中
		}
		//按键
		private function keyDown(event:KeyboardEvent):void{
			var keyCode:uint = event.charCode;
			//获取按键的键盘码
			var str:String = String.fromCharCode(keyCode)
			//将键盘码转换为相应的字母
			var mc = Fruit_MC.getChildByName(str);
			//根据该字母查询相同名称的苹果对象
			if (mc){
			//如果该苹果对象存在
				Score +=10;  //总分数加10
				Score_MC.Score_Text.text = Score.toString();
				
				Get_Num +=1;
				//击中个数加1
				Score_MC.Get_Text.text = Get_Num.toString();
				
				mc.gotoAndPlay(2);  //苹果对象跳转到第2帧播放爆炸动画
				mc.addEventListener(Event.ENTER_FRAME,endFrameHandler);
			}
		}
		private function endFrameHandler(event:Event):void{
			var mc:MovieClip = event.target as MovieClip;
			if(mc.currentFrame==mc.totalFrames){
			//如果苹果对象播放到最后一帧
				Fruit_MC.removeChild(mc);
				//将该对象从容器中删除
				mc.removeEventListener(Event.ENTER_FRAME,endFrameHandler);
			}
		}
		//显示水果
		private function Fruit_Show(event:TimerEvent):void{
			var Letter_Num:int = Math.round(Math.random()*26)+65;
			//随机生成大写字母ASCII码
			var letter_Num:int = Math.round(Math.random()*26)+97;
			//随机生成小写字母ASCII码
			var Letter_text:String=String.fromCharCode(Letter_Num);
			var letter_text:String=String.fromCharCode(letter_Num);
			//将大小写字母的ASCII码转换为字母
			var Fruit:fruit = new fruit();
			//实例化苹果对象
			var i:int = Math.round(Math.random()*1);
			//随机生成0或1，以便随机显示小写字母还是大写字母
			if (i==0){
			//如果i变量为0
				Fruit.letter.text=letter_text;
				//将小写字母显示在苹果对象上
				Fruit.name = letter_text;
				//定义苹果对象的名称为该小写字母
			}else{
				Fruit.letter.text=Letter_text;
				//将大写字母显示在苹果对象上
				Fruit.name = Letter_text;
				//定义苹果对象的名称为该大写字母
			}
			Fruit.mouseChildren=false;
			//定义对象的子项不支持鼠标
			Fruit_MC.addChild(Fruit);
			//将苹果对象加入到容器中
			addChild(Fruit_MC);
			//将容器显示在舞台上
			Fruit.x = Math.round(Math.random()*(stage.stageWidth-2*Fruit.width)+Fruit.width);
			Fruit.y = -Fruit.height;
			//随机生成苹果对象的位置
			Fruit.addEventListener(Event.ENTER_FRAME,Fruit_Down);
			//侦听苹果对象的时间轴事件，调用Fruit_Down()函数向下掉落
		}
		//水果掉落
		private function Fruit_Down(event:Event):void{
			var mc:MovieClip = event.target as MovieClip;
			//实例化目标事件对象
			if (Lose_Num>=loseNum){
			//如果丢失苹果的个数大于游戏设置的丢失个数
				mc.removeEventListener(Event.ENTER_FRAME,Fruit_Down);
				//移除时间轴事件，停止掉落苹果
			}
			mc.y += 2;  
			//实现苹果向下掉落
			if (mc.y>=stage.stageHeight){
			//如果苹果对象的y坐标大于等于舞台调度
				Fruit_MC.removeChild(mc);
				//将该苹果对象从容器中删除
				mc.removeEventListener(Event.ENTER_FRAME,Fruit_Down);
				//移除侦听该对象的时间轴事件，停止掉落
				Lose_Num +=1;
				//丢失个数加1
				Score_MC.Lose_Text.text = Lose_Num.toString();
				//将丢失个数显示在动态文本中
			}
		}
		//显示游戏说明界面
		private function GameIntro(event:MouseEvent):void{
			var Intro_MC:intro_mc = new intro_mc();
			//实例化游戏说明界面对象
			Intro_MC.x = stage.stageWidth/2;
			Intro_MC.y = stage.stageHeight/2;
			//定义游戏说明界面对象的位置
			addChild(Intro_MC);
			//将游戏说明界面显示在舞台中
			Intro_MC.Close_Btn.addEventListener(MouseEvent.CLICK,closeWindow);
			//侦听游戏说明界面的中关闭按钮，调用closeWindow()函数关闭游戏说明窗口			
		}
		//关闭游戏说明窗口
		private function closeWindow(event:MouseEvent):void{
			var mc:MovieClip = event.target.parent as MovieClip;
			//实例化事件目标对象（游戏说明界面）
			removeChild(mc);
			//将游戏说明界面删除
		}
		//隐藏实例
		private function hideAll(obj:Object):void{
			var num:int= obj.numChildren;
			//获取指定对象的子对象个数
			while(obj.numChildren!=1){
			//如果子对象的个数不等于1
				num--;
				//个数自减1
				obj.getChildAt(num).visible=false;
				//将指定索引的子对象设置为不可见
				if (num<=1){
				//如果子对象的个数小于等于1
					break;  //跳出循环
				}
			}
			Btn_MC.Play_Btn.removeEventListener(MouseEvent.CLICK,playGame);
			Btn_MC.Intro_Btn.removeEventListener(MouseEvent.CLICK,GameIntro);
			//移除侦听“开始”和“说明”按钮的鼠标单击事件
		}
		private function Del_All():void{
			if (Fruit_MC){
			//如果苹果容器存在
				while (Fruit_MC.numChildren !=0){
				//当苹果容器中的子对象个数不为0
					Fruit_MC.removeChildAt(0);
					//删除该容器最底层的对象
				}
			}
		}
	}
}