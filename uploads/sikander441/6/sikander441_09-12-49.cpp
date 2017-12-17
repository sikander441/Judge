#include<iostream>
  using namespace std;
int main()
{
   unsigned long long int sum=0;
   int x,n;cin>>n;
   for(int i=0;i<n;i++)
   {
      cin>>x;
      sum+=x;
   }
  cout<<sum;
   return 0;
}