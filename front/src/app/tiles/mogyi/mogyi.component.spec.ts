import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MogyiComponent } from './mogyi.component';

describe('MogyiComponent', () => {
  let component: MogyiComponent;
  let fixture: ComponentFixture<MogyiComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ MogyiComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(MogyiComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
