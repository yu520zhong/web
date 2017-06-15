package com.yuanhonglong.game2048;

import java.util.Timer;
import java.util.TimerTask;
import javax.swing.SwingUtilities;

/**
 * 程序入口
 * @author The master of Sword Destiny-天命剑主<br>
 *         QQ:1948281915<br>
 *         Date:2014-4-2<br>
 */
public class Game2048{
	
	// 用于记录数据
	public static int[][] data=new int[4][4];
	private static ScoreFrame frame;
	
	/**
	 * 每一局成功后初始化数据
	 */
	public static void init(){
		MainFrame.keyControl=0;
		frame.dispose();
		data=new int[4][4];
		clear();
		initGame();
	}
	
	/**
	 * 清理界面数据
	 */
	public static void clear(){
		for(int i=0;i<4;i++){
			for(int j=0;j<4;j++){
				MainFrame.myButtons[i][j].value=0;
			}
		}
		MainFrame.refreshButtons();
	}
	
	/**
	 * 成功
	 */
	public static void win(){
		MainFrame.keyControl=2;
		final FlashFrame flashFrame=new FlashFrame("   成功!");
		flashFrame.setVisible(true);
		Timer timer=new Timer();
		final TimerTask task1=new TimerTask(){
			
			@Override
			public void run(){
				flashFrame.setLocation(flashFrame.getX(),flashFrame.getY()-8);
			}
		};
		TimerTask task2=new TimerTask(){
			
			@Override
			public void run(){
				task1.cancel();
				flashFrame.dispose();
				showScore();
			}
		};
		timer.schedule(task1,0,10);
		timer.schedule(task2,1000);
	}
	
	/**
	 * 失败
	 */
	public static void failed(){
		MainFrame.keyControl=2;
		final FlashFrame flashFrame=new FlashFrame("   失败!");
		flashFrame.setVisible(true);
		Timer timer=new Timer();
		final TimerTask task1=new TimerTask(){
			
			@Override
			public void run(){
				flashFrame.setLocation(flashFrame.getX(),flashFrame.getY()-8);
			}
		};
		TimerTask task2=new TimerTask(){
			
			@Override
			public void run(){
				task1.cancel();
				flashFrame.dispose();
				showScore();
			}
		};
		timer.schedule(task1,0,10);
		timer.schedule(task2,1000);
	}
	
	/**
	 * 欢迎
	 */
	public static void welcome(){
		final FlashFrame flashFrame=new FlashFrame("   欢迎!");
		flashFrame.setVisible(true);
		Timer timer=new Timer();
		final TimerTask task1=new TimerTask(){
			
			@Override
			public void run(){
				flashFrame.setLocation(flashFrame.getX(),flashFrame.getY()-12);
			}
		};
		TimerTask task2=new TimerTask(){
			
			@Override
			public void run(){
				task1.cancel();
				flashFrame.dispose();
			}
		};
		timer.schedule(task1,0,10);
		timer.schedule(task2,1000);
	}
	
	/**
	 * 检查是否失败
	 */
	public static void checkForFailed(){
		for(int i=0;i<3;i++){
			for(int j=0;j<3;j++){
				if((data[i][j]==data[i][j+1])||(data[i][j]==data[i+1][j])){
					return;
				}
			}
		}
		for(int i=0;i<3;i++){
			if((data[i][3]==data[i+1][3])||(data[3][i]==data[3][i+1])){
				return;
			}
		}
		failed();
	}
	
	/**
	 * 得到分数,所有格子分数之和
	 */
	public static int getScore(){
		int score=0;
		for(int i=0;i<4;i++){
			for(int j=0;j<4;j++){
				score+=data[i][j];
			}
		}
		return score;
	}
	
	/**
	 * 显示分数
	 */
	public static void showScore(){
		frame=new ScoreFrame("Score:"+((Integer)getScore()).toString());
		frame.setVisible(true);
		Timer timer=new Timer();
		final TimerTask task1=new TimerTask(){
			
			@Override
			public void run(){
				if(frame.getY()>200){
					frame.setLocation(frame.getX(),frame.getY()-4);
				}
				else{
					frame.setBounds(frame.getX(),200,440,150);
				}
			}
		};
		TimerTask task2=new TimerTask(){
			
			@Override
			public void run(){
				task1.cancel();
			}
		};
		timer.schedule(task1,0,10);
		timer.schedule(task2,1000);
	}
	
	/**
	 * 开始游戏
	 */
	public static void stsrtGame2048(){
		MainFrame frame=new MainFrame();
		frame.setVisible(true);
		initGame();
	}
	
	/**
	 * 初始化两个格子的数据
	 */
	public static void initGame(){
		int m=(int)(Math.random()*16);
		int n=(int)(Math.random()*16);
		int p=Math.abs(m-n);
		if(p==n){
			p=p>7?p-1:p+1;
		}
		MainFrame.myButtons[p/4][p%4].value=2;
		MainFrame.myButtons[n/4][n%4].value=2;
		data[p/4][p%4]=2;
		data[n/4][n%4]=2;
		MainFrame.myButtons[p/4][p%4].setText("2");
		MainFrame.myButtons[n/4][n%4].setText("2");
		MainFrame.myButtons[p/4][p%4].changeBackground();
		MainFrame.myButtons[n/4][n%4].changeBackground();
		for(int i=0;i<4;i++){
			for(int j=0;j<4;j++){
				data[i][j]=MainFrame.myButtons[i][j].value;
			}
		}
	}
	
	public static void flushUp(){
		for(int j=0;j<4;j++){
			if(data[1][j]==0){
				continue;
			}
			else if(data[0][j]==0){
				MainFrame.myButtons[1][j].goUp();
			}
			else if(data[1][j]==data[0][j]){
				MainFrame.myButtons[1][j].addTo(MainFrame.myButtons[0][j]);
			}
		}
		for(int j=0;j<4;j++){
			if(data[2][j]==0){
				continue;
			}
			else if(data[1][j]==0){
				MainFrame.myButtons[2][j].goUp();
				if(data[0][j]==0){
					MainFrame.myButtons[1][j].goUp();
				}
				else if(data[0][j]==data[1][j]){
					MainFrame.myButtons[1][j].addTo(MainFrame.myButtons[0][j]);
				}
			}
			else if(data[2][j]==data[1][j]){
				MainFrame.myButtons[2][j].addTo(MainFrame.myButtons[1][j]);
			}
		}
		for(int j=0;j<4;j++){
			if(data[3][j]==0){
				continue;
			}
			else if(data[2][j]==0){
				MainFrame.myButtons[3][j].goUp();
				if(data[1][j]==0){
					MainFrame.myButtons[2][j].goUp();
					if(data[0][j]==0){
						MainFrame.myButtons[1][j].goUp();
					}
					else if(data[0][j]==data[1][j]){
						MainFrame.myButtons[1][j].addTo(MainFrame.myButtons[0][j]);
					}
				}
				else if(data[2][j]==data[1][j]){
					MainFrame.myButtons[2][j].addTo(MainFrame.myButtons[1][j]);
				}
			}
			else if(data[2][j]==data[3][j]){
				MainFrame.myButtons[3][j].addTo(MainFrame.myButtons[2][j]);
			}
		}
	}
	
	public static void flushDown(){
		for(int j=0;j<4;j++){
			if(data[2][j]==0){
				continue;
			}
			else if(data[3][j]==0){
				MainFrame.myButtons[2][j].goDown();
			}
			else if(data[2][j]==data[3][j]){
				MainFrame.myButtons[2][j].addTo(MainFrame.myButtons[3][j]);
			}
		}
		for(int j=0;j<4;j++){
			if(data[1][j]==0){
				continue;
			}
			else if(data[2][j]==0){
				MainFrame.myButtons[1][j].goDown();
				if(data[3][j]==0){
					MainFrame.myButtons[2][j].goDown();
				}
				else if(data[3][j]==data[2][j]){
					MainFrame.myButtons[2][j].addTo(MainFrame.myButtons[3][j]);
				}
			}
			else if(data[1][j]==data[2][j]){
				MainFrame.myButtons[1][j].addTo(MainFrame.myButtons[2][j]);
			}
		}
		for(int j=0;j<4;j++){
			if(data[0][j]==0){
				continue;
			}
			else if(data[1][j]==0){
				MainFrame.myButtons[0][j].goDown();
				if(data[2][j]==0){
					MainFrame.myButtons[1][j].goDown();
					if(data[3][j]==0){
						MainFrame.myButtons[2][j].goDown();
					}
					else if(data[3][j]==data[2][j]){
						MainFrame.myButtons[2][j].addTo(MainFrame.myButtons[3][j]);
					}
				}
				else if(data[1][j]==data[2][j]){
					MainFrame.myButtons[1][j].addTo(MainFrame.myButtons[2][j]);
				}
			}
			else if(data[1][j]==data[0][j]){
				MainFrame.myButtons[0][j].addTo(MainFrame.myButtons[1][j]);
			}
		}
	}
	
	public static void flushLeft(){
		for(int i=0;i<4;i++){
			if(data[i][1]==0){
				continue;
			}
			else if(data[i][0]==0){
				MainFrame.myButtons[i][1].goLeft();
			}
			else if(data[i][1]==data[i][0]){
				MainFrame.myButtons[i][1].addTo(MainFrame.myButtons[i][0]);
			}
		}
		for(int i=0;i<4;i++){
			if(data[i][2]==0){
				continue;
			}
			else if(data[i][1]==0){
				MainFrame.myButtons[i][2].goLeft();
				if(data[i][0]==0){
					MainFrame.myButtons[i][1].goLeft();
				}
				else if(data[i][1]==data[i][0]){
					MainFrame.myButtons[i][1].addTo(MainFrame.myButtons[i][0]);
				}
			}
			else if(data[i][2]==data[i][1]){
				MainFrame.myButtons[i][2].addTo(MainFrame.myButtons[i][1]);
			}
		}
		for(int i=0;i<4;i++){
			if(data[i][3]==0){
				continue;
			}
			else if(data[i][2]==0){
				MainFrame.myButtons[i][3].goLeft();
				if(data[i][1]==0){
					MainFrame.myButtons[i][2].goLeft();
					if(data[i][0]==0){
						MainFrame.myButtons[i][1].goLeft();
					}
					else if(data[i][1]==data[i][0]){
						MainFrame.myButtons[i][1].addTo(MainFrame.myButtons[i][0]);
					}
				}
				else if(data[i][2]==data[i][1]){
					MainFrame.myButtons[i][2].addTo(MainFrame.myButtons[i][1]);
				}
			}
			else if(data[i][3]==data[i][2]){
				MainFrame.myButtons[i][3].addTo(MainFrame.myButtons[i][2]);
			}
		}
	}
	
	public static void flushRight(){
		for(int i=0;i<4;i++){
			if(data[i][2]==0){
				continue;
			}
			else if(data[i][3]==0){
				MainFrame.myButtons[i][2].goRight();
			}
			else if(data[i][2]==data[i][3]){
				MainFrame.myButtons[i][2].addTo(MainFrame.myButtons[i][3]);
			}
		}
		for(int i=0;i<4;i++){
			if(data[i][1]==0){
				continue;
			}
			else if(data[i][2]==0){
				MainFrame.myButtons[i][1].goRight();
				if(data[i][3]==0){
					MainFrame.myButtons[i][2].goRight();
				}
				else if(data[i][2]==data[i][3]){
					MainFrame.myButtons[i][2].addTo(MainFrame.myButtons[i][3]);
				}
			}
			else if(data[i][1]==data[i][2]){
				MainFrame.myButtons[i][1].addTo(MainFrame.myButtons[i][2]);
			}
		}
		for(int i=0;i<4;i++){
			if(data[i][0]==0){
				continue;
			}
			else if(data[i][1]==0){
				MainFrame.myButtons[i][0].goRight();
				if(data[i][2]==0){
					MainFrame.myButtons[i][1].goRight();
					if(data[i][3]==0){
						MainFrame.myButtons[i][2].goRight();
					}
					else if(data[i][2]==data[i][3]){
						MainFrame.myButtons[i][2].addTo(MainFrame.myButtons[i][3]);
					}
				}
				else if(data[i][1]==data[i][2]){
					MainFrame.myButtons[i][1].addTo(MainFrame.myButtons[i][2]);
				}
			}
			else if(data[i][0]==data[i][1]){
				MainFrame.myButtons[i][0].addTo(MainFrame.myButtons[i][1]);
			}
		}
	}
	
	public static void addNewUp(){
		int n=(int)(Math.random()*4);
		for(int i=0;i<4;i++){
			if(data[3][n]==0){
				data[3][n]=2*((n%2)+1);
				MainFrame.myButtons[3][n].value=data[3][n];
				return;
			}
			n=(n+1)%4;
		}
		checkForFailed();
	}
	
	public static void addNewDown(){
		int n=(int)(Math.random()*4);
		for(int i=0;i<4;i++){
			if(data[0][n]==0){
				data[0][n]=2*((n%2)+1);
				MainFrame.myButtons[0][n].value=data[0][n];
				return;
			}
			n=(n+1)%4;
		}
		checkForFailed();
	}
	
	public static void addNewLeft(){
		int n=(int)(Math.random()*4);
		for(int i=0;i<4;i++){
			if(data[n][3]==0){
				data[n][3]=2*((n%2)+1);
				MainFrame.myButtons[n][3].value=data[n][3];
				return;
			}
			n=(n+1)%4;
		}
		checkForFailed();
	}
	
	public static void addNewRight(){
		int n=(int)(Math.random()*4);
		for(int i=0;i<4;i++){
			if(data[n][0]==0){
				data[n][0]=2*((n%2)+1);
				MainFrame.myButtons[n][0].value=data[n][0];
				return;
			}
			n=(n+1)%4;
		}
		checkForFailed();
	}
	
	public static void main(String[] args){
		Runnable runnable=new Runnable(){
			
			@Override
			public void run(){
				SwingUtilities.invokeLater(new Runnable(){
					
					@Override
					public void run(){
						welcome();
						stsrtGame2048();
					}
				});
			}
		};
		new Thread(runnable).start();
	}
}
