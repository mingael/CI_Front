<?php
$title = '2차원 배열';
$code = '
public class Test
{
	public static void main(String[] args)
	{
		double score[][] = { {80, 90}, {70, 80}, {60, 100} };
		double sum = 0;
		for(int i=0; i<score.length; i++)
		{
			for(int j=0; j<score[i].length; j++)
			{
				sum+= score[i][j];
			}
		}

		int row = score.length;
		int col = score[0].length;
		System.out.println(sum / (row*col));
	}
}
';
$result = '80.0';
codeConvert($code, $title, $result);
?>
score가 int 였다면 80